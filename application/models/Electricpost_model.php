<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Electricpost_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('electric_post', $formArray);
    }

    public function getPost() {
        $result = $this->db->get('electric_post')->result_array();
        return $result;
    }

    public function getSingleDish($id) {
        $this->db->where('d_id', $id);
        $dish = $this->db->get('electric_post')->row_array();
        return $dish;
    }

    public function update($id, $formArray) {
        $this->db->where('d_id', $id);
        $this->db->update('electric_post', $formArray);
    } 

    public function delete($id) {
        $this->db->where('d_id',$id);
        $this->db->delete('electric_post');
    }

    public function countDish() {
        $query = $this->db->get('electric_post');
        return $query->num_rows();
    }

    public function getelectric_post($rid) {
        $this->db->where('r_id', $rid);
        $dish = $this->db->get('electric_post')->result_array();
        return $dish;
    }
}
