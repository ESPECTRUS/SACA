<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
         $this->load->model('registro_model'); 
    	 $this->load->helper('form');
      	 $this->load->helper('url');
    	 $this->load->database('default');
    }
	public function index()
	{
		$this->load->view('archivo_personal/registro_archivo');
	}

	public function archivo()
	{
		$archivo = array(
			'NCJ_ARC' => $this->input->post('ncj_arc'),
			'NTM_ARC' => $this->input->post('ntm_arc'),
			'FOJ_ARC' => $this->input->post('foj_arc'),
			'CUB_ARC' => $this->input->post('cub_arc'),
		 );
		return $archivo;
	}

	public function datos_tecnicos()
	{
		$datos_tecnicos = array(
			'NPR_DTE' => strtoupper($this->input->post('npr_dte')),
			'LUG_DTE' => $this->input->post('lug_dte'),
			'SEC_DTE' => strtoupper($this->input->post('sec_dte')),
			'PLN_DTE' => strtoupper($this->input->post('pln_dte')),
			'MAN_DTE' => strtoupper($this->input->post('man_dte')),
			'LOT_DTE' => strtoupper($this->input->post('lot_dte')),
		);
		return $datos_tecnicos;
	}

	public function carpeta()
	{
		$carpeta=array(
			'NOM_CAR' => strtoupper($this->input->post('nom_car')),
		);
		return $carpeta;
	}
	
	public function folder()
	{
		$folder=array(
			'CANT_FOL' => $this->input->post('cant_fol'),
		);
		return $folder;

		$fechas_extremas=array(
			'FEC_INI' => (date('Y').'-'.date('m').'-'.date('d')),
			'FEC_FIN' => (date('Y').'-'.date('m').'-'.date('d')),
		);
		return $fechas_extremas;
	}

	public function documento()
	{
		$documento=array(
			'TIP_DOC' => $this->input->post('tip_doc'),
			'FEC_DOC' => (date('Y').'-'.date('m').'-'.date('d')),
			'DES_DOC' => $this->input->post('des_doc'),
		);
		return $documento;
	}
	
	public function area()
	{	
		$area=array(
			'PRO_AREA' => strtoupper($this->input->post('pro_area')),
			'OBS_AREA' => $this->input->post('obs_area')
		 );
		return $area;		
	}
/*FUNCION INSERTA*/
	   public function insertar()
    {  
         $archivo = array();
         $archivo = $this->archivo();
         $datos_tecnicos = array();
         $datos_tecnicos = $this->datos_tecnicos();
          if($this->registro_model->inserta_archivo($archivo))
          {
		  if($this->registro_model->inserta_datotecnico($datos_tecnicos))
		  	{return true;}
          }
          else
          	{return false;}
    }
	
}

/*
			'TIP_DOC' => $this->input->post('tip_doc'),
			'AMB_UBI' => strtoupper($this->input->post('amb_ubi')),
			'EST_UBI' => strtoupper($this->input->post('est_ubi')),
			'CRP_UBI' => strtoupper($this->input->post('crp_ubi')),
			'BAL_UBI' => strtoupper($this->input->post('bal_ubi')),*/