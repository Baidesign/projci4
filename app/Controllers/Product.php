<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return view('product');
        //
    }

    public function prdcts()
    {
        return view('rproducts');
    }

    public function rout()
    {
        return view('rout');
    }

}
