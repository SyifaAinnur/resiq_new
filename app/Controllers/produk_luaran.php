<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Produk_luaran extends BaseController{



    public function paving()	{

		return view('landing_page/paving');
	}

	public function kerajinan()	{

		return view('landing_page/kerajinan');
	}

}