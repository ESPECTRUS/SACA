<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Busquedanomproy extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('archivo_personal/busqueda_nombre_proyecto');
	}
}