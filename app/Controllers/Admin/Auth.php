<?php namespace App\Controllers\Admin;

// Load Model
use App\Models\Admin\Admin_model;
// End Load Model

use App\Controllers\BaseController;

class Auth extends BaseController{
	public function __construct(){
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }

	public function login(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "GET"){
			return view('admin/use/login');
		} else if($method == "POST"){
			$modelAdmin = new Admin_model();
            $username = filter_var($this->request->getVar('username'), FILTER_SANITIZE_STRING);
            $password = filter_var($this->request->getVar('password'), FILTER_SANITIZE_STRING);
            $login = [
                'username'  => $username,
                'password'  => $password
            ];
            if($this->form_validation->run($login, 'login_admin') == FALSE){
                // mengembalikan nilai input yang sudah dimasukan sebelumnya
                session()->setFlashdata('inputs', $this->request->getPost());
                // memberikan pesan error pada saat input data
                session()->setFlashdata('errors', $this->form_validation->getErrors());
                return redirect()->to(base_url('admin/login'));
            } else {
                $check_user = $modelAdmin->check_user($username);

                if($check_user){
					if($check_user['idUJenis'] != 1){
						session()->setFlashdata('error', 'Anda tidak memiliki akses');
						return redirect()->to(base_url('admin/login'));
					}
					
                    if(password_verify($password, $check_user['sandi'])){
                        session()->set('admin_user',$check_user['username']);
                        return redirect()->to(base_url('admin/dashboard'));
                    } else {
                        session()->setFlashdata('error', 'Password salah');
                        return redirect()->to(base_url('admin/login'));
                    }
                } else {
                    session()->setFlashdata('error', 'Username tidak ditemukan');
                    return redirect()->to(base_url('admin/login'));
                }
            }
		}
	}
}
