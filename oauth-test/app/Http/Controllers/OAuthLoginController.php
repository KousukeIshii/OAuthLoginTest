<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoogleUser;
use Socialite;
use Auth;


class OAuthLoginController extends Controller
{
    public function getGoogleAuth($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function authGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = GoogleUser::firstOrNew(['email' => $googleUser->email]);
        if (!$user->exists) {
            $user['email'] = $googleUser->email;
            $user['google_id'] = $googleUser->getId();
            $user['name'] = $googleUser->getNickname() ?? $googleUser->getName() ?? $googleUser->getNick();
            $user->save();
        }
        Auth::login($user);
        return redirect()->route('login');
    }
}