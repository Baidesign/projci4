<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use PhpParser\Node\Expr\Print_;
use PhpParser\Node\Stmt\Echo_;

class Blog extends BaseController
{
    public function index()
    {
        echo "<h1>This return all the blog post</h1>";
    }

    public function createNew()
    {
        return view('blogs');
    }

    public function saveBlog()
    {
        echo '<pre>';
         print_r($_POST);
        echo '<pre>';
    }

    public function msee($finale)
    {
        echo '<h2> finally got it right to access a function from a subfolder of the controller page with one parameter: '.$finale.'</h2>';
    }
}