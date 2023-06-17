<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newslettre;


class NewslettreController extends Controller
{

       //fontion afficher 
       public function index() {
              $newslettres = newslettre::all();
              return view('admin.newslettres.index_newslettre')->with('newslettres',$newslettres);    
       }

       //fontion enregistre dans  le base
       public function store(Request $request ) {

       $newslettre=new newslettre();
       $newslettre->nom = $request->nom;
       $newslettre->email = $request->email;
      
        
       if($newslettre->save()){

       return redirect('/index_newslettre')->with('mesage', 'Votre newslettre ajouter avec succses');
       }
       else{
             echo "error";     
       }
      
       } 

       //fontion supprimer 
              public function destroy( $id ) {
              $newslettres = newslettre::find($id );
              if($newslettres->delete()){
              return redirect('/index_newslettre')->with('mesage', 'Votre newslettre supprimer avec succses');
              }else{
              echo "error";
              }
       } 


        //fontion modifier 
              public function update( Request $request) {
            
              $id = $request->id_newslettre;
              $newslettres = newslettre::find($id );
              $newslettres->nom = $request->nom;
              $newslettres->email = $request->email;
              
              if($newslettres->update()){
                     return redirect('/index_newslettre')->with('mesage', 'Votre newslettre modifier avec succses');
              }else{
                     echo "error";
                     }
              }

              public function inscrit(Request $request ) {

                     $newslettre=new newslettre();
                     $newslettre->nom = $request->nom;
                     $newslettre->email = $request->email;
                     
                      
                     $newslettre->save();

                     return  redirect()->back()->with('success', 'Votre newslettre  inscrit avec success');    
              } 
              
            

              
}
