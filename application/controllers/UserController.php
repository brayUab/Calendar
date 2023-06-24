<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UserController extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		
	}
    
    public function index()
    {
        
        // return view('layouts/header');
        // return view('users/index');
        // return view('layouts/footer');
        $data['user']=$this->User_model->lista();
        $this->load->view('layouts/header');
        $this->load->view('users/index',$data);
        $this->load->view('layouts/footer');
        
    }
    //ADD USER NOS MUESTRA EL FORMULARIO 
    public function addUser()
    {
        
        
        $this->load->view('layouts/header');
        $this->load->view('users/addUser');
        $this->load->view('layouts/footer');
        
    }
    //DATOS PARA EL INSERT DE USER
    public function datos()
	{ //CARGA LOS DATOS PARA EL INSERT 3
		//$password = $this->input->post('contrasenia');		
		$params = array( //CAMPOS DE BASE DE DATOS
			
			'nombre' => trim($this->input->post('nombre')),
			'apellidoPaterno' => trim($this->input->post('apellidoPaterno')),
			'apellidoMaterno' => trim($this->input->post('apellidoMaterno')),
			'telefono' => trim($this->input->post('telefono')),
			'fechaNacimiento' => $this->input->post('fechaNacimiento'),
            
            'user' => trim($this->input->post('user')),
            
			'password' => md5($this->input->post('password')),
			'rol' => trim($this->input->post('rol')),
			
			


		);
		return $params;
	}

    public function save() //GUARDA EL REGISTRO 3
	{
		$user = $this->input->post('user'); //captura el nombre del usuario que se va guardar

		$params = $this->datos();
		//print_r ($params);
		$verificarUser = $this->User_model->verificarUser($user);
		//print_r($verificarUsuario);

		if ($verificarUser == 0) {
			$this->User_model->addUser($params);
			redirect('UserController', 'refresh');
		} else {

			$data['mensaje'] = 'El nombre se usuario se encuentra registrado';
			$this->load->view('layouts/header');
			$this->load->view('user/addUser', $data);
			$this->load->view('layouts/footer');
		}



		//echo base_url().'images/usuarios/';*/
	}
    public function formUpdateUser($idUsuario)
    {
        
        $data['usuario'] = $this->User_model->RecoverUser($idUsuario);
        
        $this->load->view('layouts/header');
        $this->load->view('users/updateUser',$data);
        $this->load->view('layouts/footer');
        
    }
	

	public function updateUser()
	{
		$idUsuario = $this->input->post('idUsuario');
		$data = $this->datos();
		$this->User_model->updateUser($idUsuario, $data);
		redirect(base_url() . 'UserController');
	}
	public function deleteUser($idUsuario)
	{

		$data = array(
			'estado' => 0

		);
		$this->User_model->deleteUser($idUsuario, $data);
		redirect(base_url() . 'UserController');
	}
    

    

    
}
