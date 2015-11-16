<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
         $this->load->model('registro_model'); 
    	 $this->load->helper('form');
    	 $this->load->helper('date');
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
			'TIP_CAR' =>('SOCIAL INDIVIDUAL')
		);
		return $carpeta;
	}
	
	public function folder()
	{
		$folder=array(
			'CANT_FOL' => $this->input->post('cant_fol'),
		);
		return $folder;
	}

	public function fechas_extremas()
	{
		$fechas_extremas=array(

			'FEC_INI' => $this->input->post('fec_ini'),
			'FEC_FIN' => $this->input->post('fec_fin'),

		);
		return $fechas_extremas;
	}
    public function ubicacion()
    {
    	$ubicacion=array(
    	'AMB_UBI' => strtoupper($this->input->post('amb_ubi')),
    	'EST_UBI' => strtoupper($this->input->post('est_ubi')),
    	'CUE_UBI' => strtoupper($this->input->post('cue_ubi')),
    	'BAL_UBI' => strtoupper($this->input->post('bal_ubi')),
    	);
    	return $ubicacion;
    }
	public function certificado_np()
	{
		$certificado_np=array(
			'DES_CER' => strtoupper($this->input->post('des_doc')),
			'FEC_CER' => strtoupper($this->input->post('fec_doc')),
		);
		return $certificado_np;
	}

		public function memorandum()
	{
		$memorandum=array(
			'DES_MEM' => strtoupper($this->input->post('des_doc')),
			'FEC_MEM' => strtoupper($this->input->post('fec_doc')),
		);
		return $memorandum;
	}

		public function resolucion()
	{
		$resolucion=array(			
			'DES_RES' => strtoupper($this->input->post('des_doc')),
			'FEC_RES' => strtoupper($this->input->post('fec_doc')),
		);
		return $resolucion;
	}

	public function minuta()
	{
		$minuta=array(
			'FEC_MIN' => strtoupper($this->input->post('fec_doc')),
			'TIP_MIN' => strtoupper($this->input->post('des_doc')),			
		);
		return $minuta;
	}

		public function testimonio()
	{
		$testimonio=array(
			'DES_TES' => strtoupper($this->input->post('des_doc')),
			'FEC_TES' => strtoupper($this->input->post('fec_doc')),
		);
		return $testimonio;
	}
		public function informe_tecnico()
	{
		$informe_tecnico=array(
			'DES_INF' => strtoupper($this->input->post('des_doc')),
			'FEC_INF' => strtoupper($this->input->post('fec_doc')),
		);
		return $informe_tecnico;
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
    	/*Declaracion de arrays*/
	

		 $carpeta=array();
		 $carpeta = $this->carpeta();
         $this->registro_model->inserta_carpeta($carpeta);
         $id_car = $this->registro_model->retornar_id_car();


         $datos_tecnicos = array();
         $datos_tecnicos = $this->datos_tecnicos();
         $this->registro_model->inserta_datotecnico($datos_tecnicos);
         $id_dte = $this->registro_model->retornar_id_dte();


         $fechas_extremas=array();
         $fechas_extremas = $this->fechas_extremas();
         $this->registro_model->inserta_fechasextremas($fechas_extremas);
         $id_fec = $this->registro_model->retornar_id_fec();

         
         $archivo = array();
         $archivo = $this->archivo();
         $archivo = array(
         				'ID_DTE'=>$id_dte,
         			    'ID_CAR'=>$id_car,
         			    'ID_FEC'=>$id_fec,
         			    'REG_ARC' => (date('Y').'-'.date('m').'-'.date('d').'-'.date('H:i:s')),
         			    );
         $this->registro_model->inserta_archivo($archivo);





         $fechas_extremas=array();
         $fechas_extremas = $this->fechas_extremas();

         $resolucion = array();
         $resolucion = $this->resolucion();

         $memorandum = array();
         $memorandum = $this->memorandum();

         $informe_tecnico = array();
         $informe_tecnico = $this->informe_tecnico();

         $minuta = array();
         $minuta = $this->minuta();

         $testimonio=array();
         $testimonio=$this->testimonio();

         $certificado_np = array();
         $certificado_np = $this->certificado_np();

         $ubicacion = array();
         $ubicacion=$this->ubicacion();

         $area = array();
         $area = $this->area();

	/*	if($this->registro_model->inserta_ubicacion($ubicacion))
         {
          if($this->registro_model->inserta_archivo($archivo))
          {

		  	if($this->registro_model->inserta_datotecnico($datos_tecnicos))
		  	{
		  	   if($this->registro_model->inserta_carpeta($carpeta))
		  	   {
		  	      if($this->registro_model->inserta_fechasextremas($fechas_extremas))
		  	      {
		  	      	 if($this->registro_model->inserta_productor($area))
		  	      	 {
		  	      	 	if($this->registro_model->inserta_documento($resolucion, $memorandum, $informe_tecnico, $minuta, $testimonio,$certificado_np))
		  	      	 	{
		  	      	 		
		  	      	 		return true;
		  	      	 		
		  	      	 	}
					 }					 		  	   	  
		  	   	  }
		  	   }
		  	}
          }
      }
          else
          {return false;}*/
    }


/*AREA USUARIO*/
    public function reg_usuario()
    {
    	$reg_usuario=array(

    		'CI_USU' => $this->input->post('ci_usu'),
    		'NOM_USU' => $this->input->post('nom_usu'),
    		'APA_USU' => $this->input->post('apa_usu'),
    		'AMA_USU' => $this->input->post('ama_usu'),
    		'PAS_USU' => $this->input->post('pas_usu'),
    		'REG_USU' =>(date('Y').'-'.date('m').'-'.date('d')),
    		);
    	return $reg_usuario;

    }

    public function insertar_usuario()
    {
    	$reg_usuario=array();
    	$reg_usuario=$this->reg_usuario();
    	if($this->registro_model->inserta_usuario($reg_usuario))
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    /*CONSULTAS*/

	/*CONSULTA DE ARCHIVO POR NOMBRE*/
	public function busca_archivo_nombre()
	{
		$query = $this->input->post('nom_car');
		    if($query)
		    {
		    	$result = $this->registro_model->busca_archivo_nombre($query);

		        if ($result != FALSE)
		        	{
		        		$data = array('result' => $result);
		        	}
		        	else
		        	{
		        		$data = array('result' =>'' );
		        	}
		    }
		$this->load->view('archivo_personal/archivo_grilla',$data);
	}


}
