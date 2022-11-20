<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurador extends CI_controller{
    
    public function index(){
        $this->load->model('Procurador_model');
        $datos['datosProcurador']= $this->Procurador_model->procuradores();
        $this->load->view('Plantillas/header');
        $this->load->view('vistasProcuradores/procuradores', $datos);
        $this->load->view('Plantillas/footer');
    }
    public function nuevo()
    {
        $this -> load -> view ('Plantillas/header');
        $this -> load-> view ('vistasProcuradores/nuevoProcuradores');
        $this -> load -> view ('Plantillas/footer');
    }
    public function guardar()
    {
        //Deben de coincidir con la vista
        $nombre= $this-> input -> post ("nombre");
        $apellido_p= $this-> input -> post ("apellido_p");
        $apellido_m= $this-> input -> post ("apellido_m");
        $direccion= $this-> input -> post ("direccion");
        $telefono= $this-> input -> post ("telefono");
        $datos= [
        //Deben de coincidir con la base de datos
            'no_procurador' => null, 
            'nombre' => $nombre, 
            'apellido_p'=> $apellido_p,
            'apellido_m' => $apellido_m,
            'direccion' => $direccion, 
            'telefono'=> $telefono
        ];
        //Enviar datos al modelo
        $this-> load-> model('Procurador_model');
        $this -> Procurador_model-> guardarProcurador($datos);
        redirect(base_url("Procurador"));
    }
    public function editar($id) //Pasamos un parametro  para ver que se va a pasar
    {
        $this-> load-> model('Procurador_model');
        $dato['nombre']= $this -> Procurador_model-> buscarProcurador($id);
        $this -> load -> view ('Plantillas/header');
        $this -> load-> view ('vistasProcuradores/editarProcuradores',$dato);
        $this -> load -> view ('Plantillas/footer');
        
    }
    public function actualizar(){
            
        $no_procurador= $this-> input -> post ("no_procurador");
        $nombre= $this-> input -> post ("nombre");
        $apellido_p= $this-> input -> post ("apellido_p");
        $apellido_m= $this-> input -> post ("apellido_m");
        $direccion= $this-> input -> post ("direccion");
        $telefono= $this-> input -> post ("telefono");
        $datos= [
        //Deben de coincidir con la base de datos
            'no_procurador' => $no_procurador, 
            'nombre' => $nombre, 
            'apellido_p'=> $apellido_p,
            'apellido_m' => $apellido_m,
            'direccion' => $direccion, 
            'telefono'=> $telefono
        ];
        $this ->load->model('Procurador_model');
        $this->Procurador_model->actualizarProcurador($no_procurador,$datos);
        redirect(base_url("Procurador"));
    }
    public function eliminar($id){
        $this-> load-> model('Procurador_model');
        $this -> Procurador_model-> eliminarProcurador($id);
        redirect(base_url("Procurador"));
    }
}