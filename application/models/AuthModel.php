<?php

//namespace Model\AuthModel;

class AuthModel extends CI_Model
{
	const SESSION_KEY = 'user_id';

	public function login($username, $password){

		if ($username == 'admin'){
			if ($password == 'admin888'){
				$this->session->set_userdata(array(self::SESSION_KEY => $username));
				return $this->session->has_userdata(self::SESSION_KEY);
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
