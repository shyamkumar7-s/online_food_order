<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Electricpost extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // $admin = $this->session->userdata('admin');
       /* if(empty($admin)) {
            $this->session->set_flashdata('msg', 'Your session has been expired');
            redirect(base_url().'admin/login/index');
        }*/
    }

    public function index() {
        $this->load->model('Electricpost_model');
        $post = $this->Electricpost_model->getPost();
        $data['post'] = $post;
        $this->load->view('admin/partials/header');
        $this->load->view('admin/electricpost/list', $data);
        $this->load->view('admin/partials/footer');
    }
    public function create_post() {

        $this->load->model('Electricpost_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
        $this->form_validation->set_rules('electric_post', 'Electric_post','trim|required');
        $this->form_validation->set_rules('address', 'Address','trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode','trim|required');

        if($this->form_validation->run() == true) {

            $formArray['electric_post'] = $this->input->post('electric_post');
            $formArray['address'] = $this->input->post('address');
            $formArray['pincode'] = $this->input->post('pincode');
 



            $this->Electricpost_model->create($formArray);

            $this->session->set_flashdata('success', 'Post added successfully');
            redirect(base_url(). 'admin/electricpost/index');


        } else {
            $this->load->view('admin/partials/header');
            $this->load->view('admin/electricpost/add_res');
            $this->load->view('admin/partials/footer');
        }
        
    }

    public function edit($id) {
        $this->load->model('Electricpost_model');
        $user = $this->Electricpost_model->getSinglePost($id);

        if(empty($user)) {
            $this->session->set_flashdata('error', 'User not found');
            redirect(base_url().'admin/electricpost/index');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
        $this->form_validation->set_rules('electric_post', 'Electric_post','trim|required');
        $this->form_validation->set_rules('address', 'Address','trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode','trim|required');

        if($this->form_validation->run() == true) { 

            $formArray['electric_post'] = $this->input->post('electric_post');
            $formArray['address'] = $this->input->post('address');
            $formArray['pincode'] = $this->input->post('pincode');

            $this->Electricpost_model->update($id,$formArray);

            $this->session->set_flashdata('success', 'User updated successfully');
            redirect(base_url(). 'admin/electricpost/index');


        } else {
            $data['user'] = $user;
            $this->load->view('admin/partials/header');
            $this->load->view('admin/electricpost/edit', $data);
            $this->load->view('admin/partials/footer');
        }
    }

    public function delete($id) {
        $this->load->model('Electricpost_model');
        $user = $this->Electricpost_model->getSinglePost($id);

        if(empty($user)) {
            $this->session->set_flashdata('error', 'User not found');
            redirect(base_url().'admin/electricpost/index');
        }

        $this->Electricpost_model->delete($id);

        $this->session->set_flashdata('success', 'User deleted successfully');
        redirect(base_url().'admin/electricpost/index');

    }

}