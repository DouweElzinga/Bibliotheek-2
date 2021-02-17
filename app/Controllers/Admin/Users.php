<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
	public function index()
	{
        // zuja: zoals in veel van jouw controllers, alles wat je via een controller wil tonen doe je via een view!!!
		//echo '<h1>This is a User area</h1>';
        $db = \Config\Database::connect(); 
        $query = $db->query('SELECT * FROM posts');
        $data['results'] = $query->getResult();
        return view('admin\\users', $data); // gaat even om het idee
	}

    public function getAllUsers()
    {
        echo '<h1>This are all users</h1>';
        //return view('product');
    }
}

?>