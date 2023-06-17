<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Information;
use App\Models\Projet;
use App\Models\Client;
use App\Models\Blog;

class GuestController extends Controller
{
   public function home(){
    $info=Information::all(); //recupere tout les informations de la base 
    $projets= Projet::all();//recupere tout les projets de la base 
    $clients= Client::all();//recupere tout les client de la base 
    $blog= Blog::all();//recupere tout les blog de la base 
  
    return view('front.acceuil')->with('info',$info)->with('projets',$projets)->with('clients',$clients)->with('blog',$blog);
   }


   public function changeLang($langcode)
   {
       App::setLocale($langcode);
       session()->put("lang_code",$langcode);  
       return  redirect()->back();
      }


   public function index(){
    
    $projets= Projet::all();//recupere tout les projets de la base 
   

    return view('front.portfolio')->with('projets',$projets);
   }


   public function indexe(){
    
      $info= Information::all(); //recupere tout les informations de la base 
      return view('front.a propos')->with('info',$info);
     }



     public function contactindex(){    
      $info= Information::all(); //recupere tout les informations de la base 
      return view('front.contact')->with('info',$info);
     }
}
