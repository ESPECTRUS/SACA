<?php if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');

Class Registro_model extends CI_Model
{
     
      function __construct()
    {
        parent::__construct();
        
    }
/*INSERTA PERSONAL*/


public function very_adj($adj)
    {
        $consulta = $this->db->get_where('carpeta',array('NOM_CAR'=>$adj));
        if($consulta->num_rows() == 1)
        {
            return true;    
        }
        else
        {
            return false;
        }
    }





 public function inserta_archivo ($archivo)
    {
        /*archivo*/
        if($this->db->insert('archivo',$archivo))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    /*INSERTA DATOS TECNICOS*/
    public function inserta_datotecnico($datos_tecnicos)//dato->id_insertado
    {
          if($this->db->insert('datos_tecnicos',$datos_tecnicos))
        {            
            return true;
        }
        else
        {
            return false;
        }
    }

    public function retornar_id()
    {
        return ($this->db->insert_id());
    }


    /*INSERTA CARPETA*/
    public function inserta_carpeta($carpeta)
    {   
        if($this->db->insert('carpeta',$carpeta))
        {   
            return true;            
        }
        else
        {
            return false;
        } 
    }
    

    /*INSERTA FECHAS EXTREMAS*/
    public function inserta_fechasextremas($fechas_extremas)
    {
        if($this->db->insert('fechas_extremas',$fechas_extremas))
        {
            return true;
        }
        else
        {
            return false;
        }    
    }
     


    /*INSERTA TIPO DE DOCUMENTO
    public function inserta_documento($resolucion, $memorandum, $informe_tecnico, $minuta, $testimonio, $certificado_np)
    {
        $tipo=$_POST['tip_doc'];
        if($tipo == 'Resolucion')
        {
            if($this->db->insert('resolucion',$resolucion))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            if($tipo == 'Memorandum')
            {
                if($this->db->insert('memorandum',$memorandum))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                 if($tipo == 'Informe Tecnico')
                 {
                    if($this->db->insert('informe_tecnico',$informe_tecnico))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                 }
                 else
                 {
                   if($tipo == 'Minuta')
                   {
                        if($this->db->insert('minuta',$minuta))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                   }
                    else
                   {
                        if($tipo == 'Testimonio')
                        {
                            if($this->db->insert('testimonio',$testimonio))
                            {
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                        }
                        else
                        {
                            if($tipo == 'Certificado de no propiedad')
                            {
                                if($this->db->insert('certificado_np',$certificado_np))
                                {
                                    return true;
                                }
                                else
                                {
                                    return false;
                                }
                            }
                            else
                            {
                                return false;
                            }
                        }

                   }
                 }

            }
        }
    }*/

/*INSERTA UBICACION*/
    public function inserta_ubicacion($ubicacion)
    {
        if($this->db->insert('ubicacion_topografica',$ubicacion))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

          

    /*INSERTA AREA*/
    public function inserta_productor($area)
    {
        if($this->db->insert('area',$area))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    
    /*REGISTRO USUARIO*/
public function inserta_usuario($reg_usuario)
{
    if($this->db->insert('usuario',$reg_usuario))
    {
        return true;
    }
    else
    {
    return false;
    }
}

/*CONSULATAS*/
/*
   public function busca_archivo_nombre($variable)
    {
        $x='%'.$variable.'%';
        $query = $this->db->query("CALL busca_nombre('$x')");
        return $query;
    }*/
}


