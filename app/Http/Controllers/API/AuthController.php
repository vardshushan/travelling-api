<?php
namespace App\Http\Controllers\API;

use App\Http\Requests\Auth\Api\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $success['first_name'] = $user->first_name;
        $success['last_name'] = $user->last_name;

        return $this->sendResponse($success, 'User register successfully.');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('Travelling')->accessToken;
            $success['first_name'] = $user->first_name;
            $success['last_name'] = $user->last_name;

            return $this->sendResponse($success, 'User login successfully.');
        }
        return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    }
}
