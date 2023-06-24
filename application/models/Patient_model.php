<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Patient_model extends CI_Model
{

	function lista() //SELECCIONA A TODOS LOS USUARIOS	1 //get_all_usuarios
	{
		// $this->db->order_by('idPaciente', 'desc');
		// return $this->db->get('paciente')->result_array();

        $this->db->select(" concat_ws(' ', IFNULL(apellidoPaterno,''), IFNULL(apellidoMaterno,''), nombre) As completo,idPaciente,sexo,fechaNacimiento,telefono");
		
		
		//$this->db->order_by('apellidoPaterno', 'asc');
		return $this->db->get('paciente')->result_array();
	}
	function comboPaciente() //SELECCIONA A TODOS LOS USUARIOS	1 //get_all_usuarios
	{
		// $this->db->order_by('idPaciente', 'desc');
		// return $this->db->get('paciente')->result_array();

        $this->db->select(" concat_ws(' ', IFNULL(apellidoPaterno,''), IFNULL(apellidoMaterno,''), nombre) As completo,idPaciente");
		
		
		//$this->db->order_by('apellidoPaterno', 'asc');
		return $this->db->get('paciente')->result_array();
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

    function addPatient($params) //INSERTA ENUEVO REGISTRO
    {
    	//print_r($params);
    	$this->db->insert('paciente', $params);
    	//return $this->db->insert_id();
    }


    
	public function RecoverPatient($idPaciente)
	{
		return $this->db->get_where('paciente', array('idPaciente' => $idPaciente))->row_array();
	}


	public function updatePatient($idPaciente, $data)
	{
		$this->db->where('idPaciente', $idPaciente);
		$this->db->update('paciente', $data);
	}
	function deletePatient($idPaciente, $data)
	{
		$this->db->where('idPaciente', $idPaciente);
		return $this->db->update('paciente', $data);
	}
}
	