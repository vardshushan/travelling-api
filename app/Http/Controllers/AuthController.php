<?php
namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('register');
    }

    public function loginIndex()
    {
        return view('login');
    }

    public function register(RegisterRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules());
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors(), 400);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
    }

    public function login(LoginRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors(), 400);
        }
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            }
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function adminDashboard()
    {
        if (Auth::check()) {
            return view('adminDashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect('login');
    }
}
