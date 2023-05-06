<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FreelancerManagement extends Controller
{
    //
    public function create(){
        $freelancer = DB::table('users')->where('role','freelancer')->get();
        return view('admin.UserManagement')->with('freelancers',$freelancer);
    }
    public function destroy(Request $request){
        DB::table('users')->where('id',$request->drop)->delete();
        session()->flash('message','Freelancer Deleted successfully !');
        return back()->with('success','Freelancer deleted successfully');
    }
}
