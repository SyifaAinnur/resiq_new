<?php namespace App\Models\Admin\Quisioner;

use CodeIgniter\Model;

class QuestionTipe_model extends Model{
    protected $table 		= 'question_answertipe';
	protected $primaryKey 	= 'id';
    protected $allowedFields = ['namaTipe'];

    // Listing
	public function listing(){
		$this->select('*');
		$this->orderBy("id", "DESC");
		$query = $this->get();
		return $query->getResultArray();
	}

	//Tambah
	public function tambah($data){
		$this->save($data);
	}

	//Read
    public function read($id){
		$this->select('*');
		$this->where(['id' => $id]);
		$query = $this->get();
		return $query->getRowArray();
	}
}