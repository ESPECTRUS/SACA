<?php

class Usuarios_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function very_user($nic_usu)
	{
		$consulta = $this->db->get_where('usuario',array('NIC_USU'=>$nic_usu));
		if($consulta->num_rows() == 1)
		{
			return true;	
		}
		else
		{
			return false;
		}
	}
	public function add_user()
	{
		$this->db->insert('usuario',array(
									'CI_USU'=>$this->input->post('ci_usu', TRUE),
									'NOM_USU'=>$this->input->post('nom_usu', TRUE),
									'APA_USU'=>$this->input->post('apa_usu', TRUE),
									'AMA_USU'=>$this->input->post('ama_usu', TRUE),
									'PAS_USU'=>$this->input->post('pas_usu', TRUE),
									'NIC_USU'=>$this->input->post('nic_usu', TRUE),
									'REG_USU'=>(date('Y').'-'.date('m').'-'.date('d').'-'.date('H:i:s')),
									'EST_USU'=>'1'
	));
	}
	public function very_session()
	{
		$consulta =$this->db->get_where('usuario', array(
													'NIC_USU'=>$this->input->post('nic_usu', TRUE),
													'PAS_USU'=>$this->input->post('pas_usu', TRUE)));
		if($consulta->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}