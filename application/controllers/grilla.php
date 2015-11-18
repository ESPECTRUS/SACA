<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grilla extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('archivo_personal/archivo_grilla');
	}
	public function reporte()
	{
		$this->load->view('archivo_personal/reporte-fpdf');
	}
	public function exportarFpdf(){
	$data["archivo"] = $this->pdf->getArchivo();
    $this->load->vars($data);
    $this->load->view("reporte-fpdf");	
    }
    
}