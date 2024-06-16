<?php

//namespace Model\AuthModel;

class AuthModel extends CI_Model
{
	const SESSION_KEY = 'user';
	private $tabel = 'user';

	public function login($username, $password){
		$this->db->where('username', $username);
		$query = $this->db->get($this->tabel);
		$user = $query->row();

		if ($user){
			if (md5($password) == $user->password){
				$this->session->set_userdata('user', $user);
				return $this->session->has_userdata('user');
			}
		}

		return false;
	}

	public function checkuser(){
		if ($this->session->has_userdata(self::SESSION_KEY)) {
			return true;
		}

		return false;
	}

	public function logout(){
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

}
