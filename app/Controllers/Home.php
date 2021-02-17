<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	// zuja: ik weet niet wat je hier precies mee wil, het wordt in elk geval nergens gebruikt?!
	// past ook niet helemaal bij de validation class.
	function validation()
	{
		$shop = new Shop();
		// per definitie wordt er nooit geechoed in een controller, maar geeft een functie iets terug, zodat de
		// aanroepende functie het resultaat kan verwerken.
		echo $shop->product('laptop', 'lenovo') . '<br>';

		$adminShop = new AdminShop();
		echo $adminShop->product('Admin laptop', 'Lenovo');

	}
}
