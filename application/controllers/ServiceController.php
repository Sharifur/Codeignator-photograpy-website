<?php

/**
 * Created by PhpStorm.
 * User: MR.Rp
 * Date: 7/25/2017
 * Time: 5:17 PM
 */
class ServiceController extends CI_Controller {
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

        $data=[];
        $data['allservice'] = $this->BM->view('service',"",array('id','desc'));
        $data['content'] = $this->load->view('backend/service/index',$data,true);
        return $this->load->view('backend/master',$data);
    }

    public function Create(){
        $data = [];
        $data['content'] = $this->load->view('backend/service/create',$data,true);
        return $this->load->view('backend/master',$data);
    }

    public function Store(){
        $submit = $this->input->post('submit');
        if($submit != null){
            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('description','Description','required');
            if($this->form_validation->run() != false){
                $data = [
                    'title'=> $this->input->post('title'),
                    'description' => $this->input->post('description')
                ];
                if($this->BM->Store('service',$data)){
                    $sdata['msg'] = 'Data Inserted Success';
                }
                $this->session->set_flashdata($sdata);
                redirect(base_url().'service','refresh');
            }else{
                $data = [];
                $data['content'] = $this->load->view('backend/service/create',$data,true);
                return $this->load->view('backend/master',$data);
            }
        }
        $data = [];
        $data['content'] = $this->load->view('backend/service/create',$data,true);
        return $this->load->view('backend/master',$data);
    }
    public function Edit($id){
        if(filter_var($id,FILTER_VALIDATE_INT)){
            $data = [];
            $data['allservice'] = $this->BM->View('service',['id'=>$id],'');
            $data['content'] = $this->load->view('backend/service/edit',$data,true);
            return $this->load->view('backend/master',$data);
        }

    }
    public function update($id){
        if(filter_var($id,FILTER_VALIDATE_INT)){
            if($this->input->post('submit') != null){
                $this->form_validation->set_rules('title','Title','Required');
                $this->form_validation->set_rules('description','Description','Required');
                    if ($this->form_validation->run() !=false){
                            $data = [
                                'title'=>$this->input->post('title'),
                                'description' => $this->input->post('description')
                            ];
                            if($this->BM->Update('service',['id'=>$id],$data)){
                                $sdata['msg']= 'Data Update Successful';
                            }
                            $this->session->set_flashdata($sdata);
                        redirect(base_url().'service','','refresh');
                    }else{
                        $data = [];
                        $data['allservice'] = $this->BM->View('service',['id'=>$id],'');
                        $data['content'] = $this->load->view('backend/service/edit',$data,refresh);
                        return $this->load->view('backend/master',$data);
                    }
            }else{
                $data = [];
                $data['allservice'] = $this->BM->View('service',['id'=>$id],'');
                $data['content'] = $this->load->view('backend/service/edit',$data,true);
                return $this->load->view('backend/master',$data);
            }

        }
    }
    public function Delete($id){
        if(filter_var($id,FILTER_VALIDATE_INT)){
            if($this->BM->Delete('service',['id'=>$id])){
                $sdata['msg'] = "Data Deleted Success";
            }
            $this->session->set_flashdata($sdata);
            redirect(base_url().'service','refresh');
        }
    }
}