<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller 
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
		$this->load->view('solicitud_archivo/solicitud_view',$data2);
	}
	public function retiro()
	{

         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('solicitud_archivo/retiro_view',$data2);
	}
	
	public function devolucion()
	{

         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('solicitud_archivo/devoluciones_view',$data2);
	}
	public function vista()
	{

         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('solicitud_archivo/solicitud-vista',$data2);
	}
		
}

