<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Help extends BaseController
{
    public function index()
    {
        return view('help');
    }

    public function product()
    {
        //echo 'This is the product we sue to see how routes operate ';
        return view('rproducts');
    }
}