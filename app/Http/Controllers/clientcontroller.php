<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class clientcontroller extends Controller
{
    public function dashboard(){
        $categories = DB::select('SELECT * FROM categorie ');
        $annonces=DB::select('SELECT * FROM postes');
        $favoris=DB::select('SELECT * FROM favoris_clients');
        $graphics_design = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();

        return view('client.dashboard')->with('categories',$categories)->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style)
            ->with('annonces',$annonces)
            ->with('favoris',$favoris);

    }
    public function profil(){
        $contrat=DB::table('contrats')->where('id_client',Auth::user()->id)->get();
        return view('client.profil')->with('contrat',$contrat);
    }
    public function addPoste(){
        $categories = DB::select('SELECT * FROM categorie WHERE nom != ?',['Other']);
        $graphics_design = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();

        return view('client.addPoste')
            ->with('categories',$categories)
            ->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style);
    }
    public function request(Request $request){
        $bio=null;
        $souscategorie=null;
        if ($_POST['subcategory1'] != null){
            $souscategorie=$request->input('subcategory1');
        }
        if ($_POST['subcategory2']!=null){
            $souscategorie=$request->input('subcategory2');
        }
        if ($_POST['subcategory3']!= null){
            $souscategorie=$request->input('subcategory3');
        }
        if ($_POST['subcategory4']!= null){
            $souscategorie=$request->input('subcategory4');
        }
        if ($_POST['subcategory5']!=null){
            $souscategorie=$request->input('subcategory5');
        }
        if ($_POST['subcategory6']!=null){
            $souscategorie=$request->input('subcategory6');
        }
        if ($_POST['subcategory7']!=null){
            $souscategorie=$request->input('subcategory7');
        }
        if ($_POST['subcategory8']!=null){
            $souscategorie=$request->input('subcategory8');
        }
        if ($_POST['other']!=null){
            $other=$request->input('other');
        }else{
            $other=null;
        }
        if ($_POST['type']!=null){
            $type=$request->input('type');
        }else{
            $type=null;
        }
        if ($_POST['bio']!=null){
            $bio=$request->input('bio');
        }
        $categorie=$request->input('categorie');
        $country=$request->input('country');
        $ville=$request->input('ville');
        $adresse=$request->input('adresse');
        $phone=$request->input('phone');
        $code=$request->input('code');
        $image = $request->file('img');
        $extension = $image->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $image->move('uploads/photouser',$filename);
        DB::table('users')
            ->where('id',Auth::user()->id)
            ->update(['categorie'=>$categorie,
                'sous_categorie'=>$souscategorie,
                'country'=>$country,
                'ville'=>$ville,
                'adresse'=>$adresse,
                'codepostal'=>$code,
                'phone'=>$phone,
                'Other'=>$other,
                'type'=>$type,
                'image'=>$filename,
                'bio'=>$bio
            ]);
        return back()->with("status", "is changed successfully!");
    }

}
