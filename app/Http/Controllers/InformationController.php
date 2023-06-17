<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Image;

class InformationController extends Controller
{
       //fontion afficher 
       public function index() {
              $informations = information::all();
              return view('admin.informations.index_information')->with('informations',$informations);    
       }

       //fontion enregistre dans  le base
       public function store(Request $request ) {
              $information=new information();
              $information->email_contact = $request->email_contact;
              $information->lien_social = $request->lien_social;
              //upload image
              $newname = uniqid();
              $image= $request->file('image');
              $newname.= "." . $image->getClientOriginalExtension();
              $destinationPath = 'uploads' ;
              $image->move($destinationPath,$newname );
              $information->image = $newname;
              $information->chiffre_happyclient = $request->chiffre_happyclient;
              $information->chiffre_projetencours = $request->chiffre_projetencours;
              $information->chiffre_projetterminer = $request->chiffre_projetterminer;
              if($information->save()){
              return redirect('/index_information')->with('mesage', 'information Ajouter avec success');
              }
              else{
              echo "error";     
              }
       } 

       //fontion supprimer 
              public function destroy( $id ) {
                     $informations = information::find($id );
       
              //supprimer image ml base donner
              $file_Path = public_path().'/uploads/'.$informations->image;
              //dd($file_Path);
              unlink($file_Path);
              if($informations->delete()){
              return redirect('/index_information')->with('message', 'Information Suprimer avec succses');
              }else{
              echo "error";
              }
              } 

       
       
       //fontion modifier 
                     public function update( Request $request) { 
                     $id = $request->id_information;
                     $informations = information::find($id );
                     $informations->email_contact = $request->email_contact;
                     $informations->lien_social = $request->lien_social;
                     $informations->chiffre_happyclient = $request->chiffre_happyclient;
                     $informations->chiffre_projetencours = $request->chiffre_projetencours;
                     $informations->chiffre_projetterminer = $request->chiffre_projetterminer;
                     if($request->file('image')){
                     //supprimer ancienne photo
                     $file_Path = public_path().'/uploads/'.$informations->image;
                     unlink($file_Path);
              
                     $newname = uniqid();
                     $image= $request->file('image');
                     $newname.= "." . $image->getClientOriginalExtension();
                     $destinationPath = 'uploads';
                     $image->move($destinationPath, $newname );
                     $informations->image = $newname;
                     

              }
                     if($informations->update()){
                     return redirect('/index_information')->with('mesage', 'information Modifier avec succses');
                     }
                     else{
                     echo "error";     
                     }
       
              }
       }
