<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialGoogleAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        try {

            $findUser = User::where('social_id', $providerUser->id)->first();
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('/dashboard');
            }
            $newUser = User::create([
                'first_name' => $providerUser->name,
                'last_name' => $providerUser->name,
                'email' => $providerUser->email,
                'social_id' => $providerUser->id,
                'social_type' => 'google',
                'password' => encrypt('defaultPassword')
            ]);
            Auth::login($newUser);
            return redirect()->intended('/dashboard');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
