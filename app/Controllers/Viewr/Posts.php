<?php

namespace App\Controllers\Viewr;

use App\Models\CustomModel;
use App\Controllers\BaseController;

class Posts extends BaseController{

    public function index()
    {
        $db = db_connect();
        $model = new CustomModel($db);

        $result = $model->all();
        
        echo '<pre>';
        print_r($result);
        echo '<pre>';


    }
    
     public function where(){
        $db = db_connect();
        $model = new CustomModel($db);

        $result = $model->where();

        echo '<pre>';
         print_r($result);
        echo '<pre>';
     }

     public function range (){
        $db = db_connect();
        $model = new CustomModel($db);

        $range = $model->range();

        echo '<pre>';
         print_r($range);
        echo '<pre>';

     }

     public function btwnr (){
        $db = db_connect();
        $model = new CustomModel($db);

        $btn = $model->rnagebtwn();

        echo '<pre>';
         print_r($btn);
        echo '<pre>';



     }

     public function asordes (){
        $db = db_connect();
        $model = new CustomModel($db);

        $btn = $model->asordis();

        echo '<pre>';
         print_r($btn);
        echo '<pre>';



     }


}