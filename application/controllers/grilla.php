<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grilla extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->database('default');
    }
	public function index()
	{
		$query = $this->db->query("CALL listar_archivos()");
        $data['result'] = $query;   
		$this->load->view('Consultas/archivo_grilla',$data);
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
	public function reporte()
	{
		$this->load->view('archivo_personal/reporte-fpdf');
	}
	public function lista_archivo()
	{
		$query1 = $this->db->query("CALL busca_nombre('%n%')");
		$data['result'] = $query1->result();
		$this->load->view('Reporte/listado_archivo_nombre',$data);
	}
	public function exportarFpdf(){

    }
    
}