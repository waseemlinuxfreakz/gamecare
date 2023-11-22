<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Services\PayUService\Exception;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended('dashboard');

            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                ]);

                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
