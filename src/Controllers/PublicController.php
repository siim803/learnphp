<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World';
        
        $posts = Post::where('category', 'world');
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = Post::where('category', 'us');
        view('us', compact('title', 'posts'));
    }

    public function test() {
        $db = new \App\DB();
    }

    public function form() {
        
        view('form');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
}