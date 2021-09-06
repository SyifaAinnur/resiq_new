<?php namespace App\Models;

use CodeIgniter\Model;

class Pemulung_model extends Model{
    protected $table 		= 'pemulung';
	protected $primaryKey 	= 'id';
    protected $allowedFields = ['nama', 'usia', 'Alamat', 'pekerjaan', 'organik', 'an-organik', 'soal1', 'soal2', 'soal3', 'soal4', 'soal5', 'soal6', 'soal7', 'soal8', 'soal9', 'soal10', 'soal11'];

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