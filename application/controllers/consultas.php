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

        public function buca_proy()
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

        $this->load->view('Consultas/grilla_nombrecarpeta',$data);

    }
}