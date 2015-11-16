<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
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
