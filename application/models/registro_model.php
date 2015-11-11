<?php if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');

Class Registro_model extends CI_Model
{
    public $id_isnertado=0;
      function __construct()
    {
        parent::__construct();
    }
/*INSERTA PERSONAL*/
 public function inserta_archivo ($archivo)
    {
        /*archivo*/
        if($this->db->insert('archivo',$archivo))
        {
            $id_isnertado = $this->db->insert_id();
            return true;
        }
        else
        {
            $id_isnertado=0;
            return false;
        }
    }
    /*INSERTA DATOS TECNICOS*/
    public function inserta_datotecnico($datos_tecnicos)//dato->id_insertado
    {
          if($this->db->insert('datos_tecnicos',$datos_tecnicos))
        {
            $id_isnertado = $this->db->insert_id();
            return true;
        }
        else
        {
            $id_isnertado=0;
            return false;
        }
    }

    public function retornar_id()
    {
        return $id_isnertado;
    }
}