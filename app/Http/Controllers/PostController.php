<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){

    $post= Post::find(1);
    $post->update([
        'title'=>'mahdi mouhamou jffjdjfjfjf'
    ]);

    $post=Post::orderby('title')->take(10)->get();
    
    
    
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


   public  function create(){
    return view('forme'); 
 }

 public function store(Request $request){

    $post = new Post();
    $post->title=$request->title;
    $post->content=$request->content;
    $post->save(); 


 }










}
