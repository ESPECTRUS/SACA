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
}