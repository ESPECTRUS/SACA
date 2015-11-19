<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('solicitud_archivo/solicitud_view');
	}
	public function retiro()
	{
		$this->load->view('solicitud_archivo/retiro_view');
	}
	
	public function devolucion()
	{
		$this->load->view('solicitud_archivo/devoluciones_view');
	}
	public function vista()
	{
		$this->load->view('solicitud_archivo/solicitud-vista');
	}
		
}

