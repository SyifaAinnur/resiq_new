<?php namespace App\Controllers\Admin;

// Load Model
use App\Models\Admin\Admin_model;
// End Load Model

use App\Controllers\BaseController;

class Dashboard extends BaseController{
	public function __construct(){
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }

	public function index()	{
		// Proteksi
        if(session()->get('admin_user') == "") {
            session()->setFlashdata('error', 'Anda belum login');
            return redirect()->to(base_url('admin/login'));
        }
        // End proteksi
		
		return view('admin/use/dashboard');
	}
}
