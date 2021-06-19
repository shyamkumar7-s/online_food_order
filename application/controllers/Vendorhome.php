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
        $user = $this->User_model->getUsers();
    }
    public function index() {
        $this->load->model('User_model');
        $user = $this->User_model->getUsers();
        $data['u_id'] = $user;
        $this->load->view('vendor/partials/header');
        $this->load->view('vendor/dashboard',$data['u_id']);
        $this->load->view('vendor/partials/footer');
    }

    
    
}
