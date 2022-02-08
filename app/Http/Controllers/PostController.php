<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){

    $post=Post::all();
 
    
       return view('articles',[
           'posts'=>$post
       ]);
   }






   public function show($id){
     $post= Post::find($id);
    //$post= Post::where('title','=','Accusamus et ratione eaque voluptates sunt aliquam tempore.')->first();

    return view('article',[
        'post'=>$post 
    ]);
    /*  $posts=[
        1=> ' mon premier id',
        2=>'deuxiem id'
    ]; 
    $post=$posts[$id] ?? 'pas de titre';
     */
   }


   public  function contact(){
      return view('contact'); 
   }













}
