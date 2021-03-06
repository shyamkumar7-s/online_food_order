<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Singup extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }


    public function index() {
         $this->load->view('front/singup');
    }

    public function create_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
        $this->form_validation->set_rules('username', 'Username','trim|required');
        $this->form_validation->set_rules('firstname', 'First Name','trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name','trim|required');
        $this->form_validation->set_rules('email', 'Email','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');
        $this->form_validation->set_rules('phone', 'Phone','trim|required');
        $this->form_validation->set_rules('mode', 'mode','trim|required');
        $this->form_validation->set_rules('electric_pole_no', 'electric_pole_no','trim|required');
        $this->form_validation->set_rules('address', 'Address','trim|required');
        if($this->form_validation->run() == true) {

            $formArray['username'] = $this->input->post('username');
            $formArray['f_name'] = $this->input->post('firstname');
            $formArray['l_name'] = $this->input->post('lastname');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $formArray['phone'] = $this->input->post('phone');
            $formArray['mode'] = $this->input->post('mode');
            $formArray['electric_pole_no'] = $this->input->post('electric_pole_no');
            $formArray['address'] = $this->input->post('address');
            $this->User_model->create($formArray);
            if($formArray['mode']=='vendor'){
                $this->load->model('User_model');
                $username = $this->input->post('username');
                $user = $this->User_model->getByUsername($username);

                $this->session->set_flashdata('user',$user['u_id']);
                redirect(base_url().'vendor/store/index');
            } else {
            $this->session->set_flashdata("success", "Account created successfully, please login");
            redirect(base_url().'login/index');
   }     } else {
            $this->load->view('front/singup');
        }
    }
}