<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Quisioner extends BaseController{



    public function pemulung()	{

		return view('landing_page/pemulung');
	}

	public function pengepul()	{

		return view('landing_page/pengepul');
	}

	public function rumah_tangga()	{

		return view('landing_page/rumahTangga');
	}
}