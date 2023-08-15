<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Help extends BaseController
{
    public function index()
    {
        echo "this is the admin help page";
    }

    public function buda($uko, $msee, $mzee)
    {
        echo '<h1> Our first parameter : '.$uko.' our second parameter:'.$msee.' and lastly our third parameter: '.$mzee.' this point to our method';
    }

    public function msee($finale)
    {
        echo '<h2> finally got it right to access a function from a subfolder of the controller page with one parameter: '.$finale.'</h2>';
    }
}