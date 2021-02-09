<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
	}

    public function product($type = 'Laptop', $product_id = 'Dell')
    {
        echo '<h1>This is Product: ' . $type . ' with product id: '.$product_id.' </h1>';
        //return view('product');
    }
}

?>