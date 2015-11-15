<?php

class Model_pdf extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getArchivo() {       	   
        $this->db->select('*');
        $q = $this->db->get('archivo');
        return $q->result();
        $q->free_result();
    }

}

?>
