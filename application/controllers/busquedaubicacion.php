<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Busquedaubicacion extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
            	 $this->load->model('usuarios_model');
        if(!$this->session->userdata('logueado'))
        {
        	redirect('login');
        }

    }
	public function index()
	{

         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('archivo_personal/busqueda_archivo_ubicacion',$data2);
	}
		public function proyecto()
	{
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('archivo_personal/busqueda_nombre_proyecto',$data2);
	}
}