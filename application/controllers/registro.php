<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller 
{
		      	
	public function __construct()
	{
        parent::__construct();
         $this->load->library('form_validation');
    	 $this->load->helper('form');
    	 $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->database('default');  
    	 $this->load->model('usuarios_model');
    	 $this->load->model('registro_model');
        if(!$this->session->userdata('logueado'))
        {
        	redirect('login');
        }
    }
	public function index()
	{

         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
         	 $data2['id'] = $this->session->userdata('id');
		$this->load->view('archivo_personal/registro_archivo', 	$data2);
	}
	public function usuario()
	{
		$data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');
		$this->load->view('archivo_personal/registro_usuario',$data2);
	}
	public function registro_very()
	{		 $data2=array();
         	 $data2['nombre'] = $this->session->userdata('nombre');
         	 $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 $data2['apellidom'] = $this->session->userdata('apellidomat');
         	 $data2['nic']  =$this->session->userdata('nic_usu');	

		if ($this->input->post('submit_reg')) {
			$this->form_validation->set_rules('nic_usu','Usuario','required|trim|callback_very_user');
			$this->form_validation->set_rules('pas_usu','Contraseña','required|trim|min_length[6]');
			$this->form_validation->set_rules('conf_pas','Repita contraseña','required|trim|min_length[6]|matches[pas_usu]');
			$this->form_validation->set_message('required', 'La %s es requerida');
			$this->form_validation->set_message('min_length', 'La %s debe tener al menos 6 caracteres');
			$this->form_validation->set_message('very_user', 'El %s ya existe');
			$this->form_validation->set_message('matches', 'La contraseña no es igual');
			if ($this->form_validation->run() != FALSE) {
				$data2['nombre'] = $this->session->userdata('nombre');
                $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 	$data2['apellidom'] = $this->session->userdata('apellidomat');
         	 	$data2['nic']  =$this->session->userdata('nic_usu');	
				$this->usuarios_model->add_user();
				$data2['mensaje']= 'El usuario se registro correctamente';
				$this->load->view('archivo_personal/registro_usuario',$data2);
			}
			else 
				$this->load->view('archivo_personal/registro_usuario',$data2);
		}
		else
		{
			redirect(base_url().'registro/usuario',$data2);
		}
	}

	function very_user($nic_usu){

		$variable = $this->usuarios_model->very_user($nic_usu);
		if($variable == true)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	public function archivo()
	{
		$a=$this->input->post('pro_area');
		$b=$this->input->post('npr_dte');

		$c=$a.'-'.$b;
		$archivo = array(
			'NCJ_ARC' => $this->input->post('ncj_arc'),
			'NTM_ARC' => $this->input->post('ntm_arc'),
			'FOJ_ARC' => $this->input->post('foj_arc'),
			'CUB_ARC' => $this->input->post('cub_arc'),
			'EST_ARC' =>'EN ARHIVO',
			'REF_ARC' =>strtoupper(($c)),
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
			'TIP_CAR' =>('SOCIAL INDIVIDUAL'),
			'HRU_CAR' =>($this->input->post('hru_car')),
			'DES_CAR' =>($this->input->post('des_car')),
			'CI_CAR' =>($this->input->post('ci_car')),
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




	function very_adj($adj){

		$variable = $this->registro_model->very_adj($adj);
		if($variable == true)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	   public function insertar()
    {  			$data2['nombre'] = $this->session->userdata('nombre');
                $data2['apellidop'] = $this->session->userdata('apellidopat');
         	 	$data2['apellidom'] = $this->session->userdata('apellidomat');
         	 	$data2['nic']  =$this->session->userdata('nic_usu');	
    	if ($this->input->post('submit_reg_arc')) {
			$this->form_validation->set_rules('ci_car','Adjudicatario','trim|callback_very_adj');
			$this->form_validation->set_message('very_adj', 'El %s ya esta registrado');

			if ($this->form_validation->run() != FALSE) {
				$carpeta=array();
		 		$carpeta = $this->carpeta();
         		$this->registro_model->inserta_carpeta($carpeta);
         		$id_car = $this->registro_model->retornar_id();	
				$data2['mensaje']= 'El usuario se registro correctamente';
         		$this->load->view('archivo_personal/registro_archivo',$data2);
		
    	/*Declaracion de arrays*/
	
         $datos_tecnicos = array();
         $datos_tecnicos = $this->datos_tecnicos();
         $this->registro_model->inserta_datotecnico($datos_tecnicos);
         $id_dte = $this->registro_model->retornar_id();


         $fechas_extremas=array();
         $fechas_extremas = $this->fechas_extremas();
         $this->registro_model->inserta_fechasextremas($fechas_extremas);
         $id_fec = $this->registro_model->retornar_id();


         $ubicacion = array();
         $ubicacion=$this->ubicacion();
         $this->registro_model->inserta_ubicacion($ubicacion);
         $id_ubi = $this->registro_model->retornar_id();


         $area = array();
         $area = $this->area();
         $this->registro_model->inserta_productor($area);
         $id_area = $this->registro_model->retornar_id();

         $id_usu = $this->session->userdata('id');
         $archivo = array();
         $archivo = $this->archivo();
         $a = array(
         				'ID_DTE'=>$id_dte,
         			    'ID_CAR'=>$id_car,
         			    'ID_FEC'=>$id_fec,
         			    'ID_UBI'=>$id_ubi,
         			    'ID_AREA'=>$id_area,
         			    'ID_USU' => $id_usu,
         			    'REG_ARC' => (date('Y').'-'.date('m').'-'.date('d').'-'.date('H:i:s')),
         			    );
         $archivo=$a+$archivo;
         $this->registro_model->inserta_archivo($archivo);

			}
			else
	
				$this->load->view('archivo_personal/registro_archivo',$data2);
	}
		else
		{
			redirect(base_url().'registro',$data2);
		}
         /*INSERTA POR TIPO DE DOCUMENTO
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

         $this->registro_model->inserta_documento($resolucion, $memorandum, $informe_tecnico, $minuta, $testimonio,$certificado_np);
    	*/
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

    

}
