<?php

/**
 * Created by PhpStorm.
 * User: MR.Rp
 * Date: 7/26/2017
 * Time: 1:18 AM
 */
class StatsController extends CI_Controller
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
        $data['allstats'] = $this->BM->View('stats',['id'=>'1'],"");
        $data['content'] = $this->load->view('backend/starts/index',$data,true);
        return $this->load->view('backend/master',$data);
    }
    public function Update(){
        if($this->input->post('submit') != null){
            $this->form_validation->set_rules('cproject','Complete Projects','required|numeric');
            $this->form_validation->set_rules('hclient','Happy Clients','required|numeric');
            $this->form_validation->set_rules('awon','Awards Won','required|numeric');
            $this->form_validation->set_rules('oclick','Our Clicks','required|numeric');
            if($this->form_validation->run() != false){
                $data = [
                    'cproject' => $this->input->post('cproject'),
                    'hclient' => $this->input->post('hclient'),
                    'awon' => $this->input->post('awon'),
                    'oclick' => $this->input->post('oclick')

                ];
                if ($this->BM->Update('stats',['id'=>'1'],$data)){
                    $this->session->set_flashdata('msg','Stats Update Successful');
                    redirect(base_url().'/stats','refresh');
                }

            }else{
                $data = [];
                $data['allstats'] = $this->BM->View('stats',['id'=>'1'],"");
                $data['content'] = $this->load->view('backend/starts/index',$data,true);
                return $this->load->view('backend/master',$data);
            }
        }else{
            $data = [];
            $data['allstats'] = $this->BM->View('stats',['id'=>'1'],"");
            $data['content'] = $this->load->view('backend/starts/index',$data,true);
            return $this->load->view('backend/master',$data);
        }
    }
}