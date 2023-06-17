<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash ;
class AdminController extends Controller
{
    //
    public function dashboard() {
           return view('admin.dashboard');    
    }
    public function profile() {
     
        return view('admin.profile'); 
 }

 public function update( Request $request) {
            
      Auth :: user()->name = $request->name;
      Auth :: user()->email= $request->email;
      if($request->password){
      Auth :: user()->password= Hash::make($request->password) ;
      }
      Auth :: user()->update();
      return redirect('/admin/profile')->with('mesage', 'Votre donnees modifier avec succses');
       }

}
