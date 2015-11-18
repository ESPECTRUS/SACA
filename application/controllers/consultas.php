<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consultas extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();        
         $this->load->model('consultas_model');          
    	 $this->load->helper('form');
    	 $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->database('default');
    }

        public function listar_archivos()
    {
                   
      //  $this->load->view('Consultas/archivo_grilla',$data);

    }
}
