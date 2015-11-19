<?php if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');

Class Consultas_model extends CI_Model
{
      function __construct()
    {
        parent::__construct();
    }
   public function listar_archivos()
    {
      
        $query = $this->db->query("CALL listar_archivos()");
        if ($query->num_rows() > 0)
            {return $query;}
            else
            {return false;}
    }
}