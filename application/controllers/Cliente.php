<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_controller{
    
    public function index(){
        $this->load->model('Cliente_model');
        $datos['datosCliente']= $this->Cliente_model->clientes();
        $this->load->view('Plantillas/header');
        $this->load->view('vistasClientes/clientes', $datos);
        $this->load->view('Plantillas/footer');
    }
    public function nuevo()
    {
        $this -> load -> view ('Plantillas/header');
        $this -> load-> view ('vistasClientes/nuevoClientes');
        $this -> load -> view ('Plantillas/footer');
    }
    public function guardar()
    {
        //Deben de coincidir con la vista
        $nombre= $this-> input -> post ("nombre");
        $apellido_p= $this-> input -> post ("apellido_p");
        $apellido_m= $this-> input -> post ("apellido_m");
        $DNI= $this-> input -> post ("DNI");
        $direccion= $this-> input -> post ("direccion");
        $telefono= $this-> input -> post ("telefono");
        $datos= [
        //Deben de coincidir con la base de datos
            'no_cliente' => null, 
            'nombre'=> $nombre,
            'apellido_p' => $apellido_p,
            'apellido_m' => $apellido_m, 
            'DNI'=> $DNI,
            'direccion' => $direccion,
            'telefono' => $telefono 
        ];
        //Enviar datos al modelo
        $this-> load-> model('Cliente_model');
        $this -> Cliente_model-> guardarCliente($datos);
        redirect(base_url("Cliente"));
    }
      //Para actualizar, ponemos dos funciones, una que muestre (editar) y otra que realize la función (actualizar)
      public function editar($id) //Pasamos un parametro  para ver que se va a pasar
      {
          $this-> load-> model('Cliente_model');
          $dato['nombre']= $this -> Cliente_model-> buscarCliente($id);
          $this -> load -> view ('Plantillas/header');
          $this -> load-> view ('vistasClientes/editarCliente',$dato);
          $this -> load -> view ('Plantillas/footer');
          
      }
      public function actualizar(){
         
          //Deben de coincidir con la vista        
        $no_cliente=$this->input->post("no_cliente");
        $nombre= $this-> input -> post ("nombre");
        $apellido_p= $this-> input -> post ("apellido_p");
        $apellido_m= $this-> input -> post ("apellido_m");
        $DNI= $this-> input -> post ("DNI");
        $direccion= $this-> input -> post ("direccion");
        $telefono= $this-> input -> post ("telefono");
          $datos= [
          //Deben de coincidir con la base de datos, 
            'no_cliente' => $no_cliente, 
            'nombre'=> $nombre,
            'apellido_p' => $apellido_p,
            'apellido_m' => $apellido_m, 
            'DNI'=> $DNI,
            'direccion' => $direccion,
            'telefono' => $telefono 
          ];
          $this ->load->model('Cliente_model');
          $this->Cliente_model->actualizarCliente($no_cliente,$datos);
          redirect(base_url("Cliente"));
      }
      public function eliminar($id){
        $this-> load-> model('Cliente_model');
        $this -> Cliente_model-> eliminarCliente($id);
        redirect(base_url("Cliente"));
    }

}

