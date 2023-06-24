<?php
defined('BASEPATH') or exit('No direct script access allowed');


class CalendarController extends CI_Controller
{
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->load->model('Calendar_Model');
        $this->load->model('Patient_model');
    }


	/*Home page Calendar view  */
	Public function index()
	{
        $data['paciente']=$this->Patient_model->comboPaciente();//en index tal como esta aqui
       // $event['agenda']=$this->Calendar_Model->get();//en index tal como esta aqufa-inversep
        //print_r($age);


		
        $this->load->view('layouts/header');
        $this->load->view('calendar/index',$data);
        $this->load->view('layouts/footer');
	}

    Public function create()
	{            $datos=$this->input->raw_input_stream;
        $data=json_decode($datos, true);


        $agenda=array(
        'idUsuario'=>$data['idUsuario'],
        'doctor'=>$data['doctor'],
        'idPaciente'=>$data['idPaciente'],
        'startDate'=>$data['startDate'],
        'endDate'=>$data['endDate'],        
        'eventDescription'=>$data['eventDescription'],
        'servicio'=>$data['servicio'],
        );
        $id=  $this->Calendar_Model->saveAgenda($agenda);
        return $id;
       //$paciente=$this->input->post('mySelect');
        
        
       
        
        
	}

    public function listEvents()
    {
        $event=$this->Calendar_Model->get();
        print_r(json_encode($event));
      
       // die();
        return json_encode($event);
    }

   
   


	

	
    

    
}
