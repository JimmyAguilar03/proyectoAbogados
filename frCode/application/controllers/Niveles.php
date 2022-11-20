<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Niveles extends CI_Controller {

	public function index()
	{
		// leer el modelo
		$this->load->model('Niveles_Model');
        $datos['datosNiveles']= $this->Niveles_Model->listaNiveles();
        $this -> load -> view ('plantillas/header');
        $this->load->view('vistasNiveles/listaNiveles', $datos);
        $this -> load -> view ('plantillas/footer');
        $mensaje=session('mensaje');
	}

    public function nuevo()
    {
        $this -> load -> view ('plantillas/header');
        $this -> load-> view ('vistasNiveles/nuevoNivel');
        $this -> load -> view ('plantillas/footer');
    }

    public function guardar()
    {
        //Deben de coincidir con la vista
        $nombreNivel= $this-> input -> post ("nombreNivel");
        $salario = $this -> input-> post("salario");
        $datos= [
        //Deben de coincidir con la base de datos
            'idLista' => null, 
            'nivel'=> $nombreNivel,
            'salario' => $salario,
            'mensaje'=> $mensaje
        ];
        //Enviar datos al modelo
        $this-> load-> model('Niveles_Model');
        $this -> Niveles_Model-> guardarNivel($datos);
        $this -> session-> set_flashdata('status', 'Información insertada correctamente');
        redirect('Niveles')->whit('mensaje', '1');
    }
    //Para actualizar, ponemos dos funciones, una que muestre (editar) y otra que realize la función (actualizar)
    public function editar($id) //Pasamos un parametro  para ver que se va a pasar
    {
        $this-> load-> model('Niveles_Model');
        $dato['nivel']= $this -> Niveles_Model-> buscarNivel($id);
        $this -> load -> view ('plantillas/header');
        $this -> load-> view ('vistasNiveles/editarNivel',$dato);
        $this -> load -> view ('plantillas/footer');
        
    }
    public function actualizar(){
       
        //Deben de coincidir con la vista        
        $idNivel=$this->input->post("idNivel");
        $nivel=$this->input->post("nombreNivel");
        $salario=$this->input->post("salario");
        $datos= [
        //Deben de coincidir con la base de datos, 
            'idLista' => $idNivel, //Los nombres deben de coincidir con los de arriba (linea 53..)
            'nivel'=> $nivel,
            'salario' => $salario
        ];
        $this ->load->model('Niveles_Model');
        $this->Niveles_Model->actualizarNivel($idNivel,$datos);
        $this -> session-> set_flashdata('status', 'Información actualizada correctamente');
        redirect('Niveles')->whit('mensaje','2');;
    }
    public function eliminar($id){
        $this-> load-> model('Niveles_Model');
        $this -> Niveles_Model-> eliminarNivel($id);
        $this -> session-> set_flashdata('status', 'Información eliminada correctamente');
        redirect('Niveles')->whit('mensaje','3');
    }
    
}
    