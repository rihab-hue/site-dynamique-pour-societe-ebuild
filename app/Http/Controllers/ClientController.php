<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Image;

class ClientController extends Controller
{

       //fontion afficher 
       public function index() {
              $clients = client::all();
              return view('admin.clients.index_clients')->with('clients',$clients);    
       }

      

        //fontion enregistre dans  le base
        public function store(Request $request ) {
              $client=new client();
              $client->nom_client = $request->nom_client;
              $client->email = $request->email;
              //upload logo
              $newname = uniqid();
              $logo= $request->file('logo');
              $newname.= "." . $logo->getClientOriginalExtension();
              $destinationPath = 'uploads' ;
              $logo->move($destinationPath,$newname );
              $client->logo = $newname;
              if($client->save()){
              return redirect('/index_client')->with('mesage', 'client Ajouter avec succses');
              }
              else{
                    echo "error";     
                    }
            } 
       

              //fontion supprimer 
              public function destroy( $id ) {
                     $clients = client::find($id );
        
                    //supprimer image ml base donner
                    $file_Path = public_path().'/uploads/'.$clients->logo;
                    unlink($file_Path);
                    if($clients->delete()){
                    return redirect('/index_client')->with('message', 'client Suprimer avec succses');
                    }else{
                    echo "error";
                    }
            } 
        



        


                //fontion modifier 
            public function update( Request $request) {
           
              $id = $request->id_client;
              $clients = client::find($id );
              $clients->nom_client = $request->nom_client;
              $clients->email = $request->email;
              if($request->file('logo')){
              //supprimer ancienne photo
              $file_Path = public_path().'/uploads/'.$clients->logo;
                unlink($file_Path);
            
                $newname = uniqid();
                $logo= $request->file('logo');
                $newname.= "." . $logo->getClientOriginalExtension();
                $destinationPath = 'uploads';
                $logo->move($destinationPath, $newname );
                $clients->logo = $newname;
            }
              if($clients->update()){
              return redirect('/index_client')->with('mesage', 'client est  Modifier avec success');
              }
              else{
                    echo "error";     
                    }
     
          }
              
              
}
