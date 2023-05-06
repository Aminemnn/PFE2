<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $user= Socialite::driver('facebook')->user();
        $profil_url=$user->getName();
        DB::table('users')->where('id',Auth::user()->id)
                               ->update(['facebook' =>$profil_url]);
        return redirect('/freelancer/profil');
    }
}
