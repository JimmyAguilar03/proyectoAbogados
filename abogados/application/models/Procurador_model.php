<?php 
class Procurador_model extends CI_Model{

    public function procuradores(){
        $query=$this->db->get('Procurador');
        return $query->result();
    }
    public function guardarProcurador($datos)
    {
        $this-> db -> insert ('Procurador', $datos);
    }
    public function buscarProcurador($id)//
    {
        $this->db->where('no_procurador', $id);
        $query= $this -> db -> get('Procurador');
        return $query -> row();
    }
    public function actualizarProcurador($no_procurador,$datos){ 
        $this->db->where('no_procurador', $no_procurador);// Tanto en update como en delete, se usa el where 
        $this->db->update('Procurador', $datos);//Se hace referencia al array
    }
    public function eliminarProcurador($id){
        $this->db->where('no_procurador', $id);
        $this->db->delete('Procurador');
    }
}