<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

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

    public function techno()
    {
        $title = 'Technology';
        $posts = array_map(fn($post) => (object) $post, [
            [
                'title' => 'PHP 8.4 property hooks',
                'created_at' => 'October 1, 2026',
                'author' => 'Martin',
                'body' => 'Property hooks let you define get and set logic directly on class properties.',
            ],
            [
                'title' => 'Building a simple router in PHP',
                'created_at' => 'October 3, 2026',
                'author' => 'Martin',
                'body' => 'A router maps a URL path to a controller method, so every page has one entry point.',
            ],
            [
                'title' => 'Why use Git for every project',
                'created_at' => 'October 5, 2026',
                'author' => 'Martin',
                'body' => 'Version control keeps a history of changes and makes it easy to share code.',
            ],
        ]);
        view('techno', compact('title', 'posts'));
    }

    public function test()
    {
        $db = new DB();
    }

    public function form()
    {

        view('form');
    }

    public function answer()
    {
        dump($_GET, $_POST);
    }
}