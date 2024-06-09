<?php

class BacaanModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private $tabel = 'bacaan';

	public function save($data){
		$this->db->insert($this->tabel, $data);
	}

	public function delete($id){
		$this->db->delete($this->tabel, ['id' => $id]);
	}

	public function edit($data,$id){
		$this->db->update($this->tabel, $data, ['idblog' => $id]);
	}

	public function getData($limit = null){
		if (!is_null($limit)){
			$this->db->limit($limit);
		}

		$query = $this->db->get($this->tabel);
		return $query->result();
	}

	public function getOne($id){
		return $this->db->get_where($this->tabel, ["id" => $id])->row();
	}

	public function update($id, $data){

		return $this->db->update($this->tabel, $data, array('id' => $id));
	}
}
