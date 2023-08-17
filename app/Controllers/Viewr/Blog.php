<?php

namespace App\Controllers\Viewr;

use App\Controllers\BaseController;
use App\Models\BlogModel;

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

    public function post($id)
    {
        $model = new BlogModel();
        $post = $model->find($id);
        if($post) {
            $data = [
                'meta_title' => $post['post_title'],
                'title' => $post['post_title'],
            ];
           
        }
        else{
            $data = [
                'meta_title' => 'Post not Found',
                'title' => 'Post Not Found',
            ];
        
        }
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

    public function new()
    {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'This is an NEw POst',
        ];
        if($this->request->getMethod()=='post'){
            $model = new BlogModel();
            $model->save($_POST);
        }
        return view('new_post', $data);
    }
}
