<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    public function index()
    {
        $data = "";
        $this->load->view('login', $data);
    }

    

    public function ingresar()
    {
        $user = $_POST['user'];
        $password = md5($_POST['password']);

        $consulta = $this->Login_model->ingresar($user, $password);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $row) {
                //crear variables de sesion
                $this->session->set_userdata('idUsuario', $row->idUsuario);
                $this->session->set_userdata('user', $row->user);
                $this->session->set_userdata('rol', $row->rol);
                redirect('Home', 'refresh');
            }
        } else {
            $data['mensaje'] = "Usuario y/o contraseña incorrectos";
            redirect('Login', 'refresh',$data);
        }
    }
            
    
}
