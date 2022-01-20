<?php

namespace App\Controllers;

class BlogController
{
    public function index()
    {
        echo 'Blog index';
    }
    
    public function show(int $id)
    {
        echo "Blog show {$id}";
    }
}
