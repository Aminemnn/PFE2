<?php

namespace App\Http\Controllers;

use App\Models\favoris_freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class store_favoris_freelancer extends Controller
{
    public function store(Request $request){
        $id_ann=$request->input('id_ann');
        $title=$request->input('title');
        $category=$request->input('category');
        $sous_category=$request->input('sous_category');
        $price_categorie=$request->input('price_categorie');
        $price=$request->input('price');
        $type_price=$request->input('type_price');
        $semaine=$request->input('semaine');
        $date=$request->input('date');
        $description=$request->input('description');
        $img_client=$request->input('img_user');
        $name_client=$request->input('name_client');
        $id_client=$request->input('id_client');
        $id_user=Auth::user()->id;
        $name_user=Auth::user()->name;
        $img_user=Auth::user()->image;

        $favoris_freelancer=new favoris_freelancer();
        $favoris_freelancer->id_ann=$id_ann;
        $favoris_freelancer->title=$title;
        $favoris_freelancer->category=$category;
        $favoris_freelancer->sous_category=$sous_category;
        $favoris_freelancer->price_category=$price_categorie;
        $favoris_freelancer->price=$price;
        $favoris_freelancer->type_price=$type_price;
        $favoris_freelancer->semaine=$semaine;
        $favoris_freelancer->date=$date;
        $favoris_freelancer->description=$description;
        $favoris_freelancer->id_user=$id_user;
        $favoris_freelancer->name_user=$name_user;
        $favoris_freelancer->img_user=$img_user;
        $favoris_freelancer->img_client=$img_client;
        $favoris_freelancer->name_client=$name_client;
        $favoris_freelancer->id_client=$id_client;
        $favoris_freelancer->save();
        return redirect('freelancer/dashboard')->with("success2","The item saved in: My first list.");
    }
    public function delete(Request $request){
        $id=$request->input('delete');
        DB::table('favoris_freelancers')->where('id_ann', "=", $id)->delete();
        return redirect('freelancer/dashboard')->with("delete", "is delete");
    }
}
