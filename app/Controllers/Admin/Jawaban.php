<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Jawaban extends BaseController{

    public function pemulung()	{

		return view('admin/use/answer/pemulung');
	}

	public function pengepul()	{

		return view('admin/use/answer/pengepul');
	}

	public function rumah_tangga()	{

		return view('admin/use/answer/rumahTangga');
	}
}