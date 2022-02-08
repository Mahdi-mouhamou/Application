<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){

    $posts=[
        'Mahdi mouhamou',
        'adel goumiri'
    ];
       return view('articles',[
           'post'=>$posts
       ]);
   }

   public function show($id){
    $posts=[
        1=> ' mon premier id',
        2=>'deuxiem id'
    ]; 
    $post=$posts[$id] ?? 'pas de titre';
    return view('article',[
        'post'=>$post 
    ]);
   }
   public  function contact(){
      return view('contact'); 
   }
}
