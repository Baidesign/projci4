<?php

namespace App\Controllers\Viewr;

use App\Models\CustomModel;
use App\Controllers\BaseController;

class Posts extends BaseController{

    public function index()
    {
        $db = db_connect();
        $model = new CustomModel($db);

        $result = $model->kuja();
        
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

     public function asordes ()
     {
        $db = db_connect();
        $model = new CustomModel($db);
        $btn = $model->asordis();

        echo '<pre>';
         print_r($btn);
        echo '<pre>';
     }

     public function join()
     {
      $db = db_connect();
      $model = new CustomModel($db);
      $result = $model->join();

      echo '<pre>';
         print_r($result);
      echo '<pre>';
     }

     public function like()
     {
      $db = db_connect();
      $model = new CustomModel($db);
      $result = $model->like();

      echo '<pre>';
         print_r($result);
      echo '<pre>';
     }

     public function grouping()
     {
      $db = db_connect();
      $model = new CustomModel($db);
      $grping = $model->grouping();

      echo '<pre>';
         print_r($grping);
      echo '<pre>';
     }

     public function wherein()
     {
      $db = db_connect();
      $mode = new CustomModel($db);
      $whrin = $mode->wherein();

      echo '<pre>';
         print_r($whrin);
      echo '<pre>';
     }

     public function cont()
     {
         $db = db_connect();
         $mode = new CustomModel($db);
         $contwh = $mode->continueWherein();

         echo '<pre>';
            print_r($contwh);
         echo '<pre>';
     }

     public function limits()
     {
         $db = db_connect();
         $mode = new CustomModel($db);
         $lmts = $mode->limits();

         echo '<pre>';
            print_r($lmts);
         echo '<pre>';
     }


}