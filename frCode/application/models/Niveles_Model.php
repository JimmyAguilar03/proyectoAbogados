<?php
class Niveles_Model extends CI_Model{

    public function listaNiveles(){

        $query= $this -> db -> get('listaNiveles');
        return $query-> result();
    }

    public function guardarNivel($datos)
    {
        $this-> db -> insert ('listaNiveles', $datos);
    }
    public function buscarNivel($id)//función que complementa a editar de "Niveles" para btener la base de datos y el englón que se quiere
    {
        $this->db->where('idLista', $id);
        $query= $this -> db -> get('listaNiveles');
        return $query -> row();
    }
    public function actualizarNivel($idNivel,$datos){ // complementa a funcion actualizar de "Niveles" y tenemos dos parametros que indican donde se va a modificar
        $this->db->where('idLista', $idNivel);// Tanto en update como en delete, se usa el where 
        $this->db->update('listaNiveles', $datos);//Se hace referencia al array
    }
    public function eliminarNivel($id){
        $this->db->where('idLista', $id);// Tanto en update como en delete, se usa el where 
        $this->db->delete('listaNiveles');
    }
}
