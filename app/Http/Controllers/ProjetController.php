<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Client;
use Image;
use Session;

class ProjetController extends Controller
{

       //fontion afficher 
       public function index() {
        
              $projets = projet::all();
              return view('admin.projets.index_projets')->with('projets',$projets);    
       }

       //fontion enregistre dans  le base
       public function store(Request $request ) {
       $projet=new projet();
       $projet->nom_projet = $request->nom_projet;
       $projet->type_projet = $request->type_projet;
       $projet->description = $request->description;
       $projet->id_client = $request->client;
       //upload image
       $newname = uniqid();
       $image= $request->file('image');
       $newname.= "." . $image->getClientOriginalExtension();
       $destinationPath = 'uploads' ;
       $image->move($destinationPath,$newname );
       $projet->image = $newname;
       if($projet->save()){
       return redirect('/index_projets')->with('mesage', 'Projet Ajouter avec succses');
       }
       else{
             echo "error";     
             }
     } 

       //fontion supprimer 
       public function destroy( $id ) {
              $projets = projet::find($id );
       
              //supprimer image ml base donner
              $file_Path = public_path().'/uploads/'.$projets->image;
               //dd($file_Path);
              unlink($file_Path);
              if($projets->delete()){
              return redirect('/index_projets')->with('message', 'Projet Suprimer avec succses');
              }else{
              echo "error";
              }
       } 


        //fontion modifier 
        public function update( Request $request) {
           
            
            $id = $request->id_projet;
            $projets = projet::find($id );
            $projets->nom_projet = $request->nom_projet;
            $projets->type_projet = $request->type_projet;
            $projets->id_client = $request->client;
            $projets->description = $request->description;
          if($request->file('image')){
            //supprimer ancienne photo
            $file_Path = public_path().'/uploads/'.$projets->image;
              unlink($file_Path);
          
              $newname = uniqid();
              $image= $request->file('image');
              $newname.= "." . $image->getClientOriginalExtension();
              $destinationPath = 'uploads';
              $image->move($destinationPath, $newname );
              $projets->image = $newname;
          }
            if($projets->update()){
            return redirect('/index_projets')->with('mesage', 'Projet Modifier avec Success');
            }
            else{
                  echo "error";     
                  }
   
        }
           
}
