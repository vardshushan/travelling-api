<?php
namespace App\Http\Controllers\API;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Services\SocialFacebookAccountService;
use App\Services\SocialGoogleAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends BaseController
{
    public function register(RegisterRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules());
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors(), 400);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('Travelling')->accessToken;
        $success['first_name'] = $user->firstName;
        $success['last_name'] = $user->lastName;

        return $this->sendResponse($success, 'User register successfully.');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('Travelling')->accessToken;
            $success['first_name'] = $user->firstName;
            $success['last_name'] = $user->lastName;

            return $this->sendResponse($success, 'User login successfully.');
        }
        return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    }

    /**
     * Create a redirect method to facebook api.
     *
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return \Illuminate\Http\RedirectResponse URL from facebook
     */
    public function callbackFacebook(SocialFacebookAccountService $service)
    {
        $service->createOrGetUser(Socialite::driver('facebook')->stateless()->user());
        return redirect()->to('/');
    }
    public function redirectGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callbackGoogle(SocialGoogleAccountService $service)
    {
        try {
            $service->createOrGetUser(Socialite::driver('Google')->stateless()->user());
            return redirect()->to('/');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


}
?>
