<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
	public function index()
	{
		echo '<h1>This is an Admin shop area</h1>';
	}

    public function product($type, $product_id)
    {
        echo '<h1>This is an Admin Product</h1>';
        //return view('product');
    }
}

?>