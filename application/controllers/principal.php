<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('archivo_personal/personal_view');
	}

public function logueado() {
        if($this->session->userdata('logueado')){
          echo($logueado);
           
           $data2['nombre'] = $this->session->userdata('nombre');
           $this->load->view('archivo_personal/personal_view', $data2);
        } else{
         redirect('login');
      }
   }
 }