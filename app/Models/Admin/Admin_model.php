<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Admin_model extends Model{
    protected $table 		= 'users';
	protected $primaryKey 	= 'id';
    protected $allowedFields = ['idUJenis', 'username', 'sandi', 'nama'];

    // Listing
	public function listing(){
		$this->select('*');
		$this->orderBy('id','DESC');
		$query = $this->get();
		return $query->getResultArray();
	}

	//Tambah
	public function tambah($data){
		$this->save($data);
	}

    //Check Username
    public function check_user($username){
        $this->select('*');
		$this->where(['username' => $username]);
		$query = $this->get();
		return $query->getRowArray();
    }

	//Read
    public function read($id){
		$this->select('*');
		$this->where(['id' => $id]);
		$query = $this->get();
		return $query->getRowArray();
	}
	
	// Edit
	public function edit($data){
		$this->update(['id' => $data['id']], $data);
	}
	
	// Delete
	public function hapus($id){
		$this->where('id',$id);
		$this->delete();
	}
}