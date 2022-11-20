<?php 
class Asunto_model extends CI_Model{

    public function asuntos(){
        $query=$this->db->get('Asunto');
        return $query->result();
    }
    public function guardarAsunto($datos)
    {
        $this-> db -> insert ('Asunto', $datos);
    }
    public function buscarAsunto($id)//
    {
        $this->db->where('no_asunto', $id);
        $query= $this -> db -> get('Asunto');
        return $query -> row();
    }
    public function actualizarAsunto($no_asunto,$datos){ 
        $this->db->where('no_asunto', $no_asunto);// Tanto en update como en delete, se usa el where 
        $this->db->update('Asunto', $datos);//Se hace referencia al array
    }
    public function eliminarAsunto($id){
        $this->db->where('no_asunto', $id);
        $this->db->delete('Asunto');
    }
}