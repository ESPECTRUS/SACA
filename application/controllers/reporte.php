<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporte extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();                  
    	   $this->load->model('usuarios_model');          
         $this->load->helper('form');
    	   $this->load->helper('date');
      	 $this->load->helper('url');
         $this->load->helper('array');
        if(!$this->session->userdata('logueado'))
        {
          redirect('login');
        }
    }
public function reporte_por_nombre()
  {
    $recuperar = array();
    if($this->uri->segment(3)!='')
    {
      $id_car = $this->uri->segment(3); 
      $query = $this->db->query("CALL reporte_por_nombre($id_car)");
      $data['result'] = $query;
    }
    $this->load->view('Reporte/busqueda_archivo_nombre',$data);

  }



}
