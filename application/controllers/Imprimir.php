<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir extends CI_controller{
    
    public function asunto($id){
        $this->load->model('Asunto_model');
        $dato['asunto']= $this -> Asunto_model-> buscarAsunto($id);
        $this->load->view('reportes/asunto', $dato);
    }
}