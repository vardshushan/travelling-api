<?php

namespace App\Http\Controllers\API;


use App\Http\Requests\Auth\Api\EditUserRequest;
use App\Http\Requests\Auth\Api\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    public function index()
    {
        return $this->sendResponse(Auth::user(), 'Auth user data.');
    }

    public function editUser(EditUserRequest $request)
    {
        try {
            $data = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'birth_date' => $request->input('birth_date'),
                'mobile_no' => $request->input('mobile_no'),
            ];
            $user = Auth::user();
            $user->update($data);
            return $this->sendResponse(Auth::user(), 'user data updated successfully.');
        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        try {
            if (!Hash::check($request->current_password, auth()->user()->password)) {
                return $this->sendError(  "Old Password Doesn't match!",["Old Password Doesn't match!"]);
            }
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return $this->sendResponse(Auth::user(), 'Password changed successfully.');
        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }

}
