<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grilla extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->database('default');
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
		$query = $this->db->query("CALL listar_archivos()");
        $data['result'] = $query;   
		$this->load->view('Consultas/archivo_grilla',$data,$data2);
	}
	public function pornombre()
	{
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('Consultas/grilla_nombreproductor',$data2);
	}
	public function porcarpeta()
	{
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('Consultas/grilla_nombrecarpeta',$data2);
	}
	public function porproyecto()
	{
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('Consultas/grilla_proyecto',$data2);
	}
	public function porubicacion()
	{
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('Consultas/grilla_ubicacion',$data2);
	}
	public function porusuario()
	{
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('Consultas/grilla_usuario',$data2);
	}
}