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
    	 $this->load->database('default');
    }

        public function busqueda_proyecto()
    {
        $query = $this->input->post('npr_dte');
        $a = $this->input->post('man_dte');
        if($query)
        {
            $query = $this->db->query("CALL busca_archivo_proy('%".$query."%','')");
            $data['result'] = $query;
        $this->load->view('Consultas/grilla_proyecto',$data);            
        }
        else
        if($a)
        {
            $query = $this->db->query("CALL busca_archivo_proy('','%".$a."%')");
            $data['result'] = $query;
        $this->load->view('Consultas/grilla_proyecto',$data);
        }
        else
        {
            redirect('busquedanomproy');
        }
    }
}

  

