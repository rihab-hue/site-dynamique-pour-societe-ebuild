<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Image;
use Session;

class BlogController extends Controller
{

       //fontion afficher 
       public function index() {
              $blogs = blog::all();
              return view('admin.blogs.index_blog')->with('blogs',$blogs);    
       }

        //fontion enregistre dans  le base
        public function store(Request $request ) {

            $blog=new blog();

            $blog->nom = $request->nom;
            $blog->description = $request->description;
            //upload image
            $newname = uniqid();
            $image= $request->file('image');
            $newname.= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads' ;
            $image->move($destinationPath,$newname );
            $blog->image = $newname;
            if($blog->save()){
            return redirect('/index_blog')->with('mesage', 'Blog Ajouter avec success');
            }
            else{
                echo "error";     
                }
        } 



              //fontion supprimer 
             public function destroy( $id ) {
             $blogs = blog::find($id );

            //supprimer image ml base donner
            $file_Path = public_path().'/uploads/'.$blogs->image;
            //dd($file_Path);
            unlink($file_Path);
            if($blogs->delete()){
            return redirect('/index_blog')->with('message', 'blog Suprimer avec succses');
            }else{
            echo "error";
            }
    } 

            //fontion modifier 
            public function update( Request $request) {
           
            $id = $request->id_blog;
            $blogs = blog::find($id );
            $blogs->nom = $request->nom;
            $blogs->description = $request->description;
            if($request->file('image')){
            //supprimer ancienne photo
            $file_Path = public_path().'/uploads/'.$blogs->image;
              unlink($file_Path);
          
              $newname = uniqid();
              $image= $request->file('image');
              $newname.= "." . $image->getClientOriginalExtension();
              $destinationPath = 'uploads';
              $image->move($destinationPath, $newname );
              $blogs->image = $newname;
          }
            if($blogs->update()){
            return redirect('/index_blog')->with('msg', 'Blog est  Modifier avec success');
            }
            else{
                  echo "error";     
                  }
   
        }
                
                    
}
