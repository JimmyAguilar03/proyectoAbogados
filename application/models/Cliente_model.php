<?php 
class Cliente_model extends CI_Model{

    public function clientes(){
        $query=$this->db->get('Cliente');
        return $query->result();
    }
    public function guardarCliente($datos)
    {
        $this-> db -> insert ('Cliente', $datos);
    }
    public function buscarCliente($id)//
    {
        $this->db->where('no_cliente', $id);
        $query= $this -> db -> get('Cliente');
        return $query -> row();
    }
    public function actualizarCliente($no_cliente,$datos){ 
        $this->db->where('no_cliente', $no_cliente);// Tanto en update como en delete, se usa el where 
        $this->db->update('Cliente', $datos);//Se hace referencia al array
    }
    public function eliminarCliente($id){
        $this->db->where('no_cliente', $id);
        $this->db->delete('Cliente');
    }
}