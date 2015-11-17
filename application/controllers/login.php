<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
         $this->load->library('form_validation');
    	 $this->load->helper('form');
    	 $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->model('usuarios_model');
    }
	public function index()
	{
		$this->load->view('archivo_personal/personal_login');
	}
	public function principal()
	{
		$this->load->view('archivo_personal/personal_view');
	}
	public function very_session(){
		if($this->input->post('submit'))
		{
			$variable = $this->usuarios_model->very_session();
			if($variable == true)
			{

			}
			else
			{
				$data = array('mensaje'=> 'El usuario y/o Contraseña son incorrectos');
				$this->load->view('archivo_personal/personal_login', $data);
			}
		}
		else
		{
			redirect(base_url().'login');
		}
	}
}
