<?php

/**
 * Created by PhpStorm.
 * User: MR.Rp
 * Date: 7/26/2017
 * Time: 12:02 PM
 */
class FooterController extends CI_Controller

{
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
        $data = [];
        $data['footerlinks'] = $this->BM->View('footer',['id'=>'1'],"");
        $data['content'] = $this->load->view('backend/footer/index',$data,true);
        return $this->load->view('backend/master',$data);
    }
    public function Update(){
        if($this->input->post('submit') != null){
            $this->form_validation->set_rules('facebook','Facebook','required|valid_url');
            $this->form_validation->set_rules('twitter','Twitter','required|valid_url');
            $this->form_validation->set_rules('dribble','Dribble','required|valid_url');
            $this->form_validation->set_rules('rss','Rss','required|valid_url');
            if ($this->form_validation->run() != false){
                $data = [
                    'facebook' => $this->input->post('facebook'),
                    'twitter' => $this->input->post('twitter'),
                    'dribble' => $this->input->post('dribble'),
                    'rss' => $this->input->post('rss')
                ];
                if($this->BM->update('footer',['id'=>'1'],$data)){
                    $this->session->set_flashdata('msg','Footer Link Update Success');
                }
                redirect(base_url().'/footer','refresh');
            }else{
                redirect(base_url().'/footer','refresh');
            }
        }else{
            redirect(base_url().'/footer','refresh');
        }
    }
}