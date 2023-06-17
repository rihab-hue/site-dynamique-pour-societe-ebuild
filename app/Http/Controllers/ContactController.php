<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
       
   
  public function saveContact(Request $request) { 
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'required',
      'phone_number' => 'required',
      'message' => 'required'
  ]);

    $contact = new Contact;

    $contact->nom = $request->name;
    $contact->email = $request->email;
    $contact->telephone = $request->phone_number;
    $contact->site_web = $request->subject;
    $contact->message = $request->message;

    $contact->save();
    \Mail::send('email.cotactMail',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'telephone' => $request->get('phone_number'),
                 'site_web' => $request->get('subject'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               { 
                  $message->from($request->email);
                  $message->to('contact@e-build.tn');
               });


     return back()->with('success', 'Merci de nous contacter !');

}

 
}
