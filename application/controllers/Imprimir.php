<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir extends CI_controller{
    
    public function asunto($id){
        $this->load->model('Asunto_model');
        $dato['asunto']= $this -> Asunto_model-> buscarAsunto($id);
        $this->load->view('reportes/asunto', $dato);
    }

    public function cliente($id){
        $this->load->model('Cliente_model');
        $dato['cliente']= $this -> Cliente_model-> buscarCliente($id);
        $this->load->view('reportes/cliente', $dato);
    }

    public function procurador($id){
        $this->load->model('Procurador_model');
        $dato['procurador']= $this -> Procurador_model-> buscarProcurador($id);
        $this->load->view('reportes/procurador', $dato);
    }
}