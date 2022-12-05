<?php 
class Estado_model extends CI_Model{

    public function estado(){
            $query=$this->db->get('listaEstados');
            return $query->result();
    }
}