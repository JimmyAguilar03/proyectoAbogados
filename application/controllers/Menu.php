<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_controller{
    
    public function index(){
        $this->load->view('Plantillas/header');
        $this->load->view('menu/menu');
        $this->load->view('Plantillas/footer');
    }
}