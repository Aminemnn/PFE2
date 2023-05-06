<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class changepassword extends Controller
{
    public function create(){
        return view('freelancer.changepassword');
    }
    public function createclient(){
        return view('client.changepassword');
    }
    public function store(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("change_password_error", "Old Password Doesnt match!");
        }

        user::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("change_password_sucess", "Password changed successfully!");
    }
}
