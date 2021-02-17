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
        // zuja: deze functie gebruik je in home.php validation() en daar echo je het resultaat, maar ook in een Route, waarom echo je het hier? Zou een return vanuit een view moeten zijn!
        // ook staat deze functie in admin\shop.php, volgens mij met hetzelfde doel, maar toch anders?
        //return '<h1>This is Product: ' . $type . ' with product id: '.$product_id.' </h1>';
        //return view('product'); // zuja: het lijkt er op dat je niet weet hoe je data kunt doorsturen naar een view.
        // voorbeeld
        $data['test'] = '<h1>This is Product: ' . $type . ' with product id: '.$product_id.' </h1>';
        return view('product', $data);
    }
}

?>