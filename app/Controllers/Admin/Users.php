<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
	public function index()
	{
		echo '<h1>This is a User area</h1>';
	}

    public function getAllUsers()
    {
        echo '<h1>This are all users</h1>';
        //return view('product');
    }
}

?>