<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grilla extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('Consultas/archivo_grilla');
	}
	public function pornombre()
	{
		$this->load->view('Consultas/grilla_nombreproductor');
	}
	public function porcarpeta()
	{
		$this->load->view('Consultas/grilla_nombrecarpeta');
	}
	public function porproyecto()
	{
		$this->load->view('Consultas/grilla_proyecto');
	}
	public function porubicacion()
	{
		$this->load->view('Consultas/grilla_ubicacion');
	}
	public function porusuario()
	{
		$this->load->view('Consultas/grilla_usuario');
	}
}