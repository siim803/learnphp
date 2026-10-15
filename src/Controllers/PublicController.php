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
        $posts = array_map(fn($post) => (object) $post, [
                    [
                        'title' => 'Some World title 1',
                        'created_at' => 'January 1, 2021',
                        'author' => 'Pets',
                        'body' => 'Some World content 1',
                    ],
                    [
                        'title' => 'Some World title 2',
                        'created_at' => 'January 3, 2021',
                        'author' => 'Manivald',
                        'body' => 'Some World content 2',
                    ],
                    [
                        'title' => 'Some World title 3',
                        'created_at' => 'January 5, 2021',
                        'author' => 'Jorss',
                        'body' => 'Some World content 3',
                    ],
                    [
                        'title' => 'Some World title 4',
                        'created_at' => 'January 7, 2021',
                        'author' => 'Heli Kopter',
                        'body' => 'Some World content 4',
                    ],
        ]);
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = array_map(fn($post) => (object) $post, [
                    [
                        'title' => 'Some U.S title 1',
                        'created_at' => 'January 1, 2021',
                        'author' => 'Pets',
                        'body' => 'Some U.S content 1',
                    ],
                    [
                        'title' => 'Some U.S title 2',
                        'created_at' => 'January 3, 2021',
                        'author' => 'Manivald',
                        'body' => 'Some U.S content 2',
                    ],
                    [
                        'title' => 'Some U.S title 3',
                        'created_at' => 'January 5, 2021',
                        'author' => 'Jorss',
                        'body' => 'Some U.S content 3',
                    ],
                    [
                        'title' => 'Some U.S title 4',
                        'created_at' => 'January 7, 2021',
                        'author' => 'Heli Kopter',
                        'body' => 'Some U.S content 4',
                    ],
        ]);
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