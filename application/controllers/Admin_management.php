<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_management extends CI_Controller {

    /**
     * Admin_management constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $userid = $this->session->userdata('myid');
        $usertype = $this->session->userdata('mytype');
        if($userid == null && $usertype != 'a'){
            redirect(base_url().'admin/login','refresh');
        }
    }



    /**
     * @return object
     */
    public function dashboard()
    {
        $data = array();
        $data['content'] = $this->load->view('backend/home','',True);
        return $this->load->view('backend/master',$data );
    }
}