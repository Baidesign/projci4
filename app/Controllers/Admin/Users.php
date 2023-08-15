<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo '<h1> this is the users area </h1>';
    }

    public function getMyUsers()
    {
        echo '<h2> Show me all my Users</h2>';
    }
}