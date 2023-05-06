<?php

namespace App\Http\Controllers;

use App\Models\verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class verified_controller extends Controller
{
    public function store(Request $request){
        if (!Hash::check($request->password, auth()->user()->password)) {
            return back()->with("verified_password_error", "Your Password incorrect");
        }else{
            $verified = new verified();
            $verified->id_user=Auth::user()->id;
            $verified->name_user=Auth::user()->name;
            $verified->img_user=Auth::user()->image;
            $verified->save();
            return redirect()->back()->with("verified_success","your request to verify your account has been received");
        }
    }
}
