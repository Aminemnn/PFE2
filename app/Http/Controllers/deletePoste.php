<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deletePoste extends Controller
{
    //
    public function delete(Request $request){
        $id=$request->input('delete');
        $client=DB::table('postes')->select('client_id')->where('id',$id)->get();
        $json=json_decode($client,true);
        $filname=$json[0]['client_id'];
        if ($filname!=null){
            return redirect('freelancer/historique')->with("errordelete","You Can't delete because this poste linked with customer");
        }else {
            DB::table('postes')->where('id', "=", $id)->delete();
            return redirect('freelancer/historique')->with("delete", "Your Post deleted Successfully");
        }
    }

}
