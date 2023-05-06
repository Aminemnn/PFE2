<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientManagement extends Controller
{
    //
    public function create(){
        $client = DB::table('users')->where('role','client')->get();
        return view('admin.ClientManagement')->with('client',$client);
    }
    public function drop(Request $request){
        DB::table('users')->where('id',$request->drop)->delete();
        session()->flash('message','Client Deleted successfully !');
        return redirect()->route('client_destroy')->with('success','Client deleted successfully');
    }
}
