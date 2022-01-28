<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

    public function index (){

        // $posts = [
        //     'mon super Titre',
        //     'mon super second titre'
        // ];
        $title = 'mon super Titre';
        $title2 = 'mon super Titre second';
        return view('articles') -> with('title',$title);
        // return view('articles', compact('posts'));
    }

    public function show($id){
        
        $posts = [
            1 => 'Mon titre numéro 1',
            2 => 'Mon titre n°2'
        ];
        $post=$posts[$id] ?? 'pas de titre';
        return view('article', [
            'post' => $post
        ]);
    }
    public function contact(){
        return view('contact');
    }

}