<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class About extends BaseController
{
    public function index()
    {
        
        return view('about');
    }

    public function help()
    {
     return view ('help');   
    }

    public function product($type, $prod_id)
    {
        echo '<h1>This is a product i like called: '.$type.' it product id is:'.$prod_id.'</h2>';
        //return view ('product');
    }
    
}