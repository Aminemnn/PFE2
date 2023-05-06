<?php

namespace App\Http\Controllers;

use App\Models\delete;
use App\Models\verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class deleted_controller extends Controller
{
    public function store(Request $request){
        if (!Hash::check($request->password, auth()->user()->password)) {
            return back()->with("deleted_password_error", "Your Password incorrect");
        }else{
            $deleted = new delete();
            $deleted->id_user=Auth::user()->id;
            $deleted->name_user=Auth::user()->name;
            $deleted->img_user=Auth::user()->image;
            $deleted->save();
            return redirect()->back()->with("deleted_success","your request to deleted your account has been received");
        }
    }
}
