<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consultas extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();        
         $this->load->model('registro_model');          
    	 $this->load->helper('form');
    	 $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->database('default');
    	 $this->load->model('usuarios_model');
    }
}