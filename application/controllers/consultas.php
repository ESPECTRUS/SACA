<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consultas extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();        
         $this->load->model('consultas_model');          
    	 $this->load->helper('form');
    	 $this->load->helper('date');
      	 $this->load->helper('url');
        if(!$this->session->userdata('logueado'))
        {
          redirect('login');
        }
    }

        public function busqueda_proyecto()
    {
           $data2['nombre'] = $this->session->userdata('nombre');
           $data2['apellidop'] = $this->session->userdata('apellidopat');
           $data2['apellidom'] = $this->session->userdata('apellidomat');
           $data2['nic']  =$this->session->userdata('nic_usu');    	 $this->load->database('default');
        $query = $this->input->post('npr_dte');
        $a = $this->input->post('man_dte');
        if($query)
        {
            $query = $this->db->query("CALL busca_archivo_proy('%".$query."%','')");
            $data['result'] = $query;
        $this->load->view('Consultas/grilla_proyecto',$data,$data2);            
        }
        else
        if($a)
        {
            $query = $this->db->query("CALL busca_archivo_proy('','%".$a."%')");
            $data['result'] = $query;
        $this->load->view('Consultas/grilla_proyecto',$data,$data2);
        }
        else
        {
            redirect('busquedanomproy');
        }
    }
}

  

