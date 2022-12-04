<?php 
class Asunto_model extends CI_Model{

    public function asuntos(){
        $query=$this->db->query(" SELECT A.no_asunto,C.nombre,C.apellido_p,C.apellido_m, 
        A.fecha_final,A.fecha_archivado AS fecha_inicio, LE.no_estado, LE.nombreEstado AS estado, A.detalle
        FROM Asunto as A 
        JOIN Cliente as C 
        ON A.no_cliente = C.no_cliente
        JOIN listaEstados as LE
        ON A.estado = LE.no_estado
        ");
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