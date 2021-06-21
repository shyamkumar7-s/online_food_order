<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct(){
        parent::__construct();
       
        $this->load->helper('date');
        $this->load->model('Order_model');
        $this->load->model('User_model');
        $this->load->model('Store_model');
    }

    public function index($username) {
        $this->load->model('User_model');
        $user = $this->User_model->getByUsername($username);
        $id=$user['u_id'];
        $store = $this->Store_model->getUserStore($id);
        $rid=$store['r_id'];
        $order = $this->Order_model->getRestOrder($rid);
        $data['orders'] = $order;
        $data['admin'] =$username;
        $this->load->view('vendor/partials/header');
        $this->load->view('vendor/orders/list', $data);
        $this->load->view('vendor/partials/footer');
    }

    public function processOrder($id,$username) {
        $order = $this->Order_model->getOrderByUser($id);
        $data['order'] = $order;
        $data['user'] = $username;
        $this->load->view('vendor/partials/header');
        $this->load->view('vendor/orders/processOrder', $data);
        $this->load->view('vendor/partials/footer');
    }

    public function updateOrder($id,$username) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('status','Status', 'trim|required');

        if($this->form_validation->run() == true) {

            $order['status'] = $this->input->post('status');
            $orderData['success-date'] = date('Y-m-d H:i:s', now());
            $this->Order_model->update($id, $order);
            
            $this->session->set_flashdata('success', 'Order processed successfully');
            redirect(base_url().'vendor/orders/index/'.$username);

        } else {
            $order = $this->Order_model->getAllOrders();
            $data['orders'] = $order;
        }
    }

    public function deleteOrder($id) {
        $order = $this->Order_model->getAllOrders();
        $data['orders'] = $order;


        if(empty($order)) {
            $this->session->set_flashdata('error', 'Order not found');
            redirect(base_url().'vendor/orders/index');
        }

        $this->Order_model->deleteOrder($id);

        $this->session->set_flashdata('success', 'Order deleted successfully');
        redirect(base_url().'vendor/orders/index');
    }

}