<?php

namespace App\Controllers;

//the follow code allows us to tap into the 
//the  Help controller from the Admin subfolder
use App\Controllers\Admin\Help;

class Home extends BaseController
{
    public function index(): string
    {
        #return view('welcome_message');
        return view('welcome');
    }

    function valid(){

        /* 
        we use this piece of codes to borrow 
        the  method product 
        from the About controller 
        together with its parameters
        */
        $shop = new About();
        echo $shop->product('desktop', 'dell');
    }

    function validAdmin(){
        /*
        this method will point out to the method
        msee in the Help controller
        from th Admin subfolder in the controller 
        directory with it parameters
        */
        $aki = new Help();
        echo $aki->msee('walai');
    }
}