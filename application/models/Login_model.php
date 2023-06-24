<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function ingresar($user, $password)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('user', $user);
		$this->db->where('password', $password);
		return $this->db->get();
	}
}
