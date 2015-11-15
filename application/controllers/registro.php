<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');



    }
	public function index()
	{
		$this->load->view('archivo_personal/registro_archivo');
	}
	public function usuario()
	{
		$this->load->view('archivo_personal/registro_usuario');
	}
	public function registro_very()
	{
		if ($this->input->post('submit_reg')) {
			$this->form_validation->set_rules('pas_usu','Contraseña','required|trim|min_length[6]');
			$this->form_validation->set_message('required', 'La %s es requerida');
			$this->form_validation->set_message('min_length', 'La %s debe tener al menos 6 caracteres');

			if ($this->form_validation->run() != FALSE) {
				
			}
			else 
				$this->load->view('archivo_personal/registro_usuario');
		}
	}
}