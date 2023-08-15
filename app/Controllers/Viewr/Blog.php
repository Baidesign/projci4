<?php

namespace App\Controllers\Viewr;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Blogger Page',
            'title' => 'this is the Bloggers page',
        ];

        $posts = ['Title 1','Title 2', 'Title 3'];
        $data['posts'] = $posts;

        
        return view('blog', $data);
        
        //
    }

    public function post()
    {
        $data = [
            
            'title' => 'Post are found here',
        ];

       $postys = [ 'Kuja','Hapa'];
       $data['postys'] = $postys;
        return view('single_post', $data);
    }

    public function home()
    {
        $data = [
            'meta_title' => 'Home Page',
            'title' => 'this is our Home page',
        ];   
        return view('home', $data);
        
    }
}
