<?php

namespace App\Controllers\Viewr;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use App\Models\CustomModel;

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
    public function combo(){
       
        $db = db_connect();
        $model = new CustomModel($db);
        echo '<pre>';
        print_r($model->getPosts());
        echo '<pre>';
        
        return view('combo');
        
    }

    public function post($id)
    {
        //code to retrieve our data from the database
        $model = new BlogModel();
        $post = $model->find($id);
        if($post) {
            $data = [
                'meta_title' => $post['post_title'],
                'title' => $post['post_title'],
                'content' => $post['post_content'],
                'post' => $post,
            ];
           
        }
        else{
            $data = [
                'meta_title' => 'Post not Found',
                'title' => 'Post Not Found',
                'content' => 'Content Not found',
            ];
        
        }
        return view('single_post', $data);
    }

    public function delete($id){
        //controller to delete the data from the database
        $model = new BlogModel();
        $post = $model->find($id);
        //this will retrun as to our blog page once we have deleted our post
        if ($post) {
            $model->delete($id);
            return redirect()->to('/new');
            # code...
        }
    }

    public function edit($id){
        $model = new BlogModel();
        $post =$model->find($id);

        $data = [
            'meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post' => $post
        ];

        if($this->request->getMethod()=='post'){
            //this is to connect to our database
            $model = new BlogModel();
            //this nxt line will allow us to be able to update 
            // instead of just creating a new post
            $_POST['post_id'] = $id;
            // this is to save our changes on the database
            $model->save($_POST);
        }
        //to display our current edited or updated data
        $data['post'] = $post;

        return view('edit_post', $data);




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
