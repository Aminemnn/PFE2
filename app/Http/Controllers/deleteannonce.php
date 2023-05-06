<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteannonce extends Controller
{
    //
    public function delete(Request $request){
        $id=$request->input('delete');
        $freelancer=DB::table('annonces')->select('id_freelancer')->where('id',$id)->get();
        $json=json_decode($freelancer,true);
        $filname=$json[0]['id_freelancer'];
        if ($filname!=null){
            return redirect('client/historique')->with("errordelete","You Can't delete because this poste linked with customer");
        }else {
            DB::table('annonces')->where('id', "=", $id)->delete();
            return redirect('client/historique')->with("delete", "Your Post deleted Successfully");
        }
    }

}
