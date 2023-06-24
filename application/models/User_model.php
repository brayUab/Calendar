<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{

	function lista() //SELECCIONA A TODOS LOS USUARIOS	1 //get_all_usuarios
	{
		$this->db->order_by('idUsuario', 'desc');
		return $this->db->get('usuario')->result_array();
	}
    /* verificar usuario
        */
    function verificarUser($user) //VERIFICA SI YA EXISTE EL MISMO USUARIO 3
    {
    	$this->db->from("usuario");
    	$this->db->where("user", $user);
    	$r = $this->db->get();

     	return $r->num_rows();
	if ($r->num_rows() == 1) {
		return 1;
	} else {
		return 0;
	}
    }

    function addUser($params) //INSERTA ENUEVO REGISTRO
    {
    	//print_r($params);
    	$this->db->insert('usuario', $params);
    	//return $this->db->insert_id();
    }
	public function RecoverUser($idUsuario)
	{
		return $this->db->get_where('usuario', array('idUsuario' => $idUsuario))->row_array();
	}


	public function updateUser($idUsuario, $data)
	{
		$this->db->where('idUsuario', $idUsuario);
		$this->db->update('usuario', $data);
	}
	function deleteUser($idUsuario, $data)
	{
		$this->db->where('idUsuario', $idUsuario);
		return $this->db->update('usuario', $data);
	}
}
	