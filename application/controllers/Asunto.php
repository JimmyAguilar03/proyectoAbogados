<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asunto extends CI_controller{
    
    public function index(){
        $this->load->model('Asunto_model');
        $datos['datosAsunto']= $this->Asunto_model->asuntos();
        $this->load->view('Plantillas/header');
        $this->load->view('vistasAsuntos/asuntos', $datos);
        $this->load->view('Plantillas/footer');
    }
    public function nuevo()
    {
        $this->load->model('Cliente_model');
        $datos['datosCliente']= $this->Cliente_model->clientes();
        $this->load->model('Estado_model');
        $datos['datosEstado']= $this->Estado_model->estado();
        $this -> load -> view ('Plantillas/header');
        $this -> load-> view ('vistasAsuntos/nuevoAsuntos', $datos);
        $this -> load -> view ('Plantillas/footer');
    }
    public function guardar()
    {
        //Deben de coincidir con la vista
        $no_cliente= $this-> input -> post ("no_cliente");
        $fecha_final= $this-> input -> post ("fecha_final");
        $fecha_archivado= $this-> input -> post ("fecha_archivado");
        $estado= $this-> input -> post ("estado");
        $detalle= $this-> input -> post ("detalle");
        $datos= [
        //Deben de coincidir con la base de datos
            'no_asunto' => null, 
            'no_cliente' => $no_cliente, 
            'fecha_final'=> $fecha_final,
            'fecha_archivado' => $fecha_archivado,
            'estado' => $estado, 
            'detalle'=> $detalle
        ];
        //Enviar datos al modelo
        $this-> load-> model('Asunto_model');
        $this -> Asunto_model-> guardarAsunto($datos);
        redirect(base_url("Asunto"));
    }
    public function editar($id) //Pasamos un parametro  para ver que se va a pasar
    {
        $this-> load-> model('Asunto_model');
        $dato['no_cliente']= $this -> Asunto_model-> buscarAsunto($id);
        $this -> load -> view ('Plantillas/header');
        $this -> load-> view ('vistasAsuntos/editarAsunto',$dato);
        $this -> load -> view ('Plantillas/footer');
        
    }
    public function actualizar(){
            
        $no_asunto= $this-> input -> post ("no_asunto");  
        $no_cliente= $this-> input -> post ("no_cliente");
        $fecha_final= $this-> input -> post ("fecha_final");
        $fecha_archivado= $this-> input -> post ("fecha_archivado");
        $estado= $this-> input -> post ("estado");
        $detalle= $this-> input -> post ("detalle");
        $datos= [
        //Deben de coincidir con la base de datos
            'no_asunto' => $no_asunto, 
            'no_cliente' => $no_cliente, 
            'fecha_final'=> $fecha_final,
            'fecha_archivado' => $fecha_archivado,
            'estado' => $estado, 
            'detalle'=> $detalle
        ];
        $this ->load->model('Asunto_model');
        $this->Asunto_model->actualizarAsunto($no_asunto,$datos);
        redirect(base_url("Asunto"));
    }
    public function eliminar($id){
        $this-> load-> model('Asunto_model');
        $this -> Asunto_model-> eliminarAsunto($id);
        redirect(base_url("Asunto"));
    }
}