<?php namespace App\Controllers\Admin;

// Load Model
use App\Models\Admin\Admin_model;
use App\Models\Admin\Quisioner\QuestionMaster_model;
use App\Models\Admin\Quisioner\QuestionTipe_model;
use App\Models\Admin\Quisioner\QAPilihan_model;
// End Load Model

use App\Controllers\BaseController;

class Quisioner extends BaseController{
	public function __construct(){
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }

	public function index(){
		// Proteksi
        if(session()->get('admin_user') == "") {
            session()->setFlashdata('error', 'Anda belum login');
            return redirect()->to(base_url('admin/login'));
        }
        // End proteksi

		return view('admin/use/quisioner');
	}

    public function add(){
		// Proteksi
        if(session()->get('admin_user') == "") {
            session()->setFlashdata('error', 'Anda belum login');
            return redirect()->to(base_url('admin/login'));
        }
        // End proteksi

		$method = $_SERVER['REQUEST_METHOD'];
		$modelQuestionMaster = new QuestionMaster_model();
		$modelQuestionTipe = new QuestionTipe_model();
		$modelQAPilihan = new QAPilihan_model();
		if($method == 'POST'){
			$pertanyaan = filter_var($this->request->getVar('pertanyaan'), FILTER_SANITIZE_STRING);
			$tipe = filter_var($this->request->getVar('tipe'), FILTER_SANITIZE_STRING);
			$option = filter_var($this->request->getVar('option'), FILTER_SANITIZE_STRING);

			$data = [
				'pertanyaan' => $pertanyaan,
				'tipe' => $tipe
			];
			if($this->form_validation->run($data, 'addQuesioner') == FALSE){
                // mengembalikan nilai input yang sudah dimasukan sebelumnya
                session()->setFlashdata('inputs', $this->request->getPost());
                // memberikan pesan error pada saat input data
                session()->setFlashdata('errors', $this->form_validation->getErrors());
                return redirect()->to(base_url('admin/quisioner/add'));
            } else {
				$dataQuestionMaster = [
					'idUJenis' 		=> 1,
					'question' 		=> $pertanyaan
				];
				$modelQuestionMaster->insert($dataQuestionMaster);

				$dataQuestionTipe = [
					'namaTipe' => $tipe
				];
				$modelQuestionTipe->insert($dataQuestionTipe);
				$idQTipe = $modelQuestionTipe->getInsertID();

				$dataQAPilihan = [
					'idQATipe' => $idQTipe,
					'pilihanAnswer' => $option
				];
				$modelQAPilihan->insert($dataQAPilihan);

				session()->setFlashdata('success', 'Data berhasil ditambahkan');
				return redirect()->to(base_url('admin/quisioner'));
			}			
		} else {
			return view('admin/use/quisioner/quisioner_create');
		}
	}
}