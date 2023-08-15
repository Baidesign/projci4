<?php

namespace App\Controllers\Meso;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo "<h1> This is the page for aour trial blog";
        //
    }

    public function createApage()
    {
        return view('blogs');
        //
    }

    public function saveApage()
    {
        echo '<pre>';
         print_r($_POST);
        echo '<pre>';
    }


}
