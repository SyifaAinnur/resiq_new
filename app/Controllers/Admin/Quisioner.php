<?php namespace App\Controllers\Admin;

// Load Model
use App\Models\Admin\Admin_model;
// End Load Model

use App\Controllers\BaseController;

class Quisioner extends BaseController{


	public function index()	{

		return view('admin/use/quisioner');
	}

    public function add()	{

		return view('admin/use/quisioner/quisioner_create');
	}
}