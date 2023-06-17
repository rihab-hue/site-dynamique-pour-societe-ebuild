<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewslettreController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MailController;
use App\Models\Projet;
use App\Models\Information;
use App\Models\Blog;
use App\Models\Newslettre;
use App\Models\Client;




/* front*/
Route::group([  'middleware' => 'Language'], function(){
    Route::get('/apropos',[GuestController::class,'indexe'])->name('apropos');
     Route::get('/',[GuestController::class,'home']);
     Route::get('/portfolio',[GuestController::class,'index'])->name('portfolio');
     Route::get('/contact',[GuestController::class,'contactindex'])->name('contact');
     Route::get('/news', function () {
        return view('front.news');
    })->name('news');   
     Route::get('/index_blog', function () {
        return view('admin.blogs.index_blog');
    });
     Route::get('/change-language/{lang}', [GuestController::class, 'changeLang']);
});








/* backend*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->middleware('auth');;
Route::get('/admin/profile',[AdminController::class,'profile']);
Route::post('/edite_profile',[AdminController::class,'update']);
Route::get('/client/dashboard',[ClientController::class,'dashboard']);

//projet
Route::get('/index_projets',[ProjetController::class,'index'])->middleware('auth');;
Route::get('/ajout_projet', function () {
    $clients= Client::all();
    return view('admin.projets.ajouter')->with('clients',$clients);
})->name('ajout_projet'); //page ajouter projet

Route::get('/edite_projets/{id}', function ($id) { 
    $clients= Client::all();

    $projets=projet::find($id);
    return view('admin.projets.update_projet')->with('projets',$projets)->with('clients',$clients);
})->name('modifier_projet'); //page modifier projet 

Route::post('/store_projets',[ProjetController::class,'store']);

Route::get('/admin/projet/{i}/delete',[ProjetController::class,'destroy']);

Route::post('/edite_projets',[ProjetController::class,'update']);

//blog

Route::get('/ajout_blog', function () {
    return view('admin.blogs.ajouter');
})->name('ajout_blog'); //page ajouter blog

Route::get('/edite_blogs/{id}', function ($id) {
    $blogs=blog::find($id);
    return view('admin.blogs.update_blog')->with('blogs',$blogs);
})->name('modifier_blog'); //page modifier blog 

Route::get('/index_blog',[BlogController::class,'index'])->middleware('auth');;
Route::post('/store_blogs',[BlogController::class,'store']);
Route::get('/admin/blog/{i}/delete',[BlogController::class,'destroy']);
Route::post('/edite_blogs',[BlogController::class,'update']);

//information

Route::get('/ajout_information', function () {
    return view('admin.informations.ajouter');
})->name('ajout_information'); //page ajouter information 

Route::get('/edite_informations/{id}', function ($id) {
    $informations=information::find($id);
    return view('admin.informations.update_information')->with('informations',$informations);
})->name('modifier_information'); //page modifier information

Route::get('/index_information',[InformationController::class,'index'])->middleware('auth');;
Route::post('/store_informations',[InformationController::class,'store']);
Route::get('/admin/information/{i}/delete',[InformationController::class,'destroy']);
Route::post('/edite_informations',[InformationController::class,'update']);

//newlettre
Route::get('/ajout_newslettre', function () {
    return view('admin.newslettres.ajouter');
})->name('ajout_newslettre'); //page ajouter newslettrre 

Route::get('/edite_newslettres/{id}', function ($id) {
    $newslettres=newslettre::find($id);
    return view('admin.newslettres.update_newslettre')->with('newslettres',$newslettres);
})->name('modifier_newslettre'); //page modifier newslettre 

Route::get('/index_newslettre',[NewslettreController::class,'index'])->middleware('auth');;
Route::post('/store_newslettres',[NewslettreController::class,'store']);
Route::get('/admin/newslettre/{i}/delete',[NewslettreController::class,'destroy']);
Route::post('/edite_newslettres',[NewslettreController::class,'update']);

Route::post('/inscrit',[NewslettreController::class,'inscrit']) ; // form newslettre 


//client
Route::get('/ajout_client', function () {
    return view('admin.clients.ajouter');
})->name('ajout_client'); //page ajouter client 

Route::get('/edite_clients/{id}', function ($id) {
    $clients=client::find($id);
    return view('admin.clients.update_client')->with('clients',$clients);
})->name('modifier_client');//page modifier client 

Route::get('/index_client',[ClientController::class,'index'])->middleware('auth');;
Route::post('/store_clients',[ClientController::class,'store']);
Route::get('/admin/client/{i}/delete',[ClientController::class,'destroy']);
Route::post('/edite_clients',[ClientController::class,'update']);

//contact

Route::post('/contacte',[ContactController::class,'saveContact'])->name('contacte');


