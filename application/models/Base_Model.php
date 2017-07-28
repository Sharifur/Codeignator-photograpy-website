<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Model extends CI_Model{
    public $id;

    Public function View($table,$where,$order){
        if($where){
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from($table);
        if ($order){
            $this->db->order_by($order[0],$order[1]);
        }
        return $this->db->get()->result();
    }

    public function Store($table,$data){
        if($this->db->insert($table,$data)){
            $this->Id = $this->db->insert_id();
            return true;
        }
        return false;
    }
    public function FileUpload($filepath,$filename,$fieldname) {

        $this->load->library('upload');
        $config['upload_path'] = $filepath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '3000';
        $config['max_height'] = '2000';
        $config['file_name'] = $filename;
        $this->upload->initialize($config);
        $this->upload->do_upload($fieldname);
    }
    public function Update($table,$where,$data){
        $this->db->where($where);
        if($this->db->update($table,$data)){
            return true;
        }
        return false;
    }
    public function Delete($table,$where){
        $this->db->where($where);
        if($this->db->delete($table)){
            return true;
        }
        return false;
    }

}