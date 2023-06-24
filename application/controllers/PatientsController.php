<?php
defined('BASEPATH') or exit('No direct script access allowed');


class PatientsController extends CI_Controller

{

    function __construct()
	{
		parent::__construct();
		$this->load->model('Patient_model');
		
	}
    
    public function index()
    {
        
        $data['paciente']=$this->Patient_model->lista();//en index tal como esta aqui
        $this->load->view('layouts/header');
        $this->load->view('patients/index',$data);
        $this->load->view('layouts/footer');
        
    }
    public function addPatients()
    {  
        $this->load->view('layouts/header');
        $this->load->view('patients/addPatients');
        $this->load->view('layouts/footer'); 
    }


    //DATOS PARA EL INSERT DE PACIENETE
    public function datos()
	{ //CARGA LOS DATOS PARA EL INSERT 3
		
        date_default_timezone_set("America/La_Paz");
		$params = array( //CAMPOS DE BASE DE DATOS
            
			'nombre' => trim($this->input->post('nombre')),
			'apellidoPaterno' => trim($this->input->post('apellidoPaterno')),
			'apellidoMaterno' => trim($this->input->post('apellidoMaterno')),
			'telefono' => trim($this->input->post('telefono')),
			'fechaNacimiento' => $this->input->post('fechaNacimiento'),
            'sexo' => trim($this->input->post('sexo')),
            'idUsuario' => trim($this->input->post('idUsuario')),
            
		);
		return $params;
	}


    public function save() //GUARDA EL REGISTRO 3
	{
		$data = $this->datos();
		$this->Patient_model->addPatient($data);
		redirect(base_url() . 'PatientsController');



		//echo base_url().'images/usuarios/';*/
	}

    public function formUpdatePatient($idPaciente)
    {
		
        
        $data['paciente'] = $this->Patient_model->RecoverPatient($idPaciente);
        
        $this->load->view('layouts/header');
        $this->load->view('patients/updatePatients',$data);
        $this->load->view('layouts/footer');
        
    }
	

	public function updatePatients()
	{
		$idPaciente = $this->input->post('idPaciente');
		$data = $this->datos();
		$this->Patient_model->updatePatient($idPaciente, $data);
		redirect(base_url() . 'PatientsController');
	}
	public function deletePatient($idPaciente)
	{

		$data = array(
			'estado' => 0

		);
		$this->Patient_model->deletePatient($idPaciente, $data);
		redirect(base_url() . 'PatientsController');
	}
    
}
