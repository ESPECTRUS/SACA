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

		$this->load->view('archivo_personal/principal');
		$this->load->view('archivo_personal/personal_view');
	}
	public function very_session(){
		if($this->input->post('submit_log'))
		{
			$nic_usu = $this->input->post('nic_usu');
         	$pas_usu = $this->input->post('pas_usu');
         	$this->load->model('usuarios_model');
			$variable = $this->usuarios_model->very_session();
			$usuario= $this->usuarios_model->traedatos($nic_usu,$pas_usu);
			if($variable == true and isset($usuario))
			{
				$usuario_data = array(
								'id' => $usuario->ID_USU,
								'nombre' =>$usuario->NOM_USU,
								'apellidopat' =>$usuario->APA_USU,
								'apellidomat' =>$usuario->AMA_USU,
								'nic_usu'=>$usuario->NIC_USU,
								'logueado' =>TRUE);
				$this->session->set_userdata($usuario_data);
				redirect ('login/logueado');
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

		public function logueado() {
    	  if($this->session->userdata('logueado')){

        	 $data2=array();	
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
         	 $this->load->view('archivo_personal/personal_view', $data2);
        } else{
         redirect('login');
      }
   }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('login');
   }
	}
