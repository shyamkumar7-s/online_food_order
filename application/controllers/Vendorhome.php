<?php
defined('BASEPATH') OR exit ('No direct script access allowed');



class Vendorhome extends CI_Controller {

    public function __construct(){
        parent::__construct();
       
        $this->load->model('Store_model');
        $this->load->model('Menu_model');
        $this->load->model('User_model');
        $this->load->model('Order_model');
        $this->load->model('Category_model');
    }
    public function index() {
        $this->load->view('vendor/partials/header');
        $this->load->view('vendor/dashboard');
        $this->load->view('vendor/partials/footer');
    }

    
    
}
