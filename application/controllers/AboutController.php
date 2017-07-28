<?php

Class AboutController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $userid = $this->session->userdata('myid');
        $usertype = $this->session->userdata('mytype');
        if($userid == null && $usertype != 'a'){
            redirect(base_url().'admin/login','refresh');
        }
    }
    public function index(){
        $this->load->helpers('form');
        $this->load->library('form_validation');
        $data = [];
        $data['about'] = $this->BM->View('about',array('id'=> '1'),'');
        $data['content'] = $this->load->view('backend/about/index',$data,true);
        return $this->load->view('backend/master',$data);
    }
    public function Store(){
        $this->load->helpers('form');
        $this->load->library('form_validation');

        $submit = $this->input->post('submit');
        $this->form_validation->set_rules('description','Description','required');

        if ($submit != null){
            if ($this->form_validation->run() == False){
                $data = [];
                $data['about'] = $this->BM->View('about',array('id'=> '1'),'');
                $data['content'] = $this->load->view('backend/about/index',$data,true);
                return $this->load->view('backend/master',$data);
            }else{
                $data = [
                    'description' => $this->input->post('description'),
                ];
                if($this->BM->Update('about',['id'=>'1'],$data)){
                    $sdata['msg'] = "Data Update Successfully";
                }
                $this->session->set_flashdata($sdata);
                $data = [];
                $data['about'] = $this->BM->View('about',array('id'=> '1'),'');
                $data['content'] = $this->load->view('backend/about/index',$data,true);
                return $this->load->view('backend/master',$data);
            }
        }else{
            $data = [];
            $data['about'] = $this->BM->View('about',array('id'=> '1'),'');
            $data['content'] = $this->load->view('backend/about/index',$data,true);
            return $this->load->view('backend/master',$data);
        }
    }
}