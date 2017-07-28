<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HeaderController extends CI_Controller

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
    public function index()
    {
        $data = array();
        $data['header'] = $this->BM->View('header',"",array('id','desc'));
        $data['content'] = $this->load->view('backend/header/index',$data,True);
        return $this->load->view('backend/master',$data );
    }

    public function Create(){
        $data = array();
        $data['content'] = $this->load->view('backend/header/create',"",True);
        return $this->load->view('backend/master',$data );
    }

    public function Store(){

        $submit = $this->input->post('submit');
        if($submit != Null){
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[25]');
            $this->form_validation->set_rules('brtext', 'Bordered Text', 'required|max_length[15]');
            $this->form_validation->set_rules('shortdes', 'Short Description', 'required');
            if (empty($_FILES['pic']['name']))
            {
                $this->form_validation->set_rules('pic', 'Picture', 'required');
            }
            if($this->form_validation->run() == FALSE){
                $data = array();
                $data['content'] = $this->load->view('backend/header/create',"",True);
                return $this->load->view('backend/master',$data );
            }else{
                $ext = ImageCheck($_FILES['pic']['name']);

                $data= [
                  'btext' => $this->input->post('brtext'),
                  'title' => $this->input->post('title'),
                  'shortdes' => $this->input->post('shortdes'),
                  'picture' => $ext
                ];
                if($this->BM->Store('header',$data)){
                    $id = $this->BM->Id;
                    if($ext){
                        $this->BM->FileUpload('./images/header',"header-pic-{$id}.{$ext}","pic");
                    }
                    $sdata = array("msg"=>"Data Inserted Successfully");
                }else{
                    $sdata = array("msg" => "Data Insert Failed");
                }
                $this->session->set_flashdata($sdata);
                redirect(base_url() ."header/create","refresh");
            }


        }else{
            redirect(base_url() ."header/create","refresh");
        }

    }

    public function Edit($id){
        $data = [];
        $data['headers'] = $this->BM->View('header',['id'=>$id],'');
        $data['content'] = $this->load->view('backend/header/edit',$data,true);
        return $this->load->View('backend/master',$data);
    }

    public function Update($id){



        $submit = $this->input->post('submit');

        if($submit != Null){
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[25]');
            $this->form_validation->set_rules('brtext', 'Bordered Text', 'required|max_length[15]');
            $this->form_validation->set_rules('shortdes', 'Short Description', 'required');


            if($this->form_validation->run() == FALSE){
                $data = array();
                $data['headers'] = $this->BM->View('header',['id'=>$id],'');
                $data['content'] = $this->load->view('backend/header/edit',$data,True);
                return $this->load->view('backend/master',$data );
            }else{
                $headers = $this->BM->View('header',['id'=>$id],'');
                foreach ($headers as $hitems){
                    $old_ext = $hitems->picture;
                }
                $ext = ImageCheck($_FILES['pic']['name']);
                if ($ext == ""){
                    $ext = $old_ext;
                }else{
                    if (file_exists("images/header/header-pic-{$id}.{$old_ext}")){
                        unlink("images/header/header-pic-{$id}.{$old_ext}");
                        $this->BM->FileUpload('./images/header',"header-pic-{$id}.{$ext}","pic");
                    }else{
                        $this->BM->FileUpload('./images/header',"header-pic-{$id}.{$ext}","pic");
                    }
                }
                $data= [
                    'btext' => $this->input->post('brtext'),
                    'title' => $this->input->post('title'),
                    'shortdes' => $this->input->post('shortdes'),
                    'picture' => $ext
                ];
                if($this->BM->Update('header',['id'=>$id],$data)){
                    $sdata = array("msg"=>"Data Update Successfully");
                }else{
                    $sdata = array("msg" => "Data Update Failed");
                }
                $this->session->set_flashdata($sdata);
                redirect(base_url().'header','refresh');
            }

        }else{
            redirect(base_url() ."header/edit/{$id}","refresh");
        }
    }
    public function Delete($id){
        $header = $this->BM->View('header',['id'=>$id],'');
        foreach ($header as $head){
            $old_ext = $head->picture;
        }
        if($this->BM->delete('header',['id'=>$id])){
            if (file_exists("images/header/header-pic-{$id}.{$old_ext}")){
                unlink("images/header/header-pic-{$id}.{$old_ext}");
            }
            $sdata = array("msg"=>"Data Delete Successfully");
        }else{
            $sdata = array("msg" => "Data Delete Failed");
        }
        $this->session->set_flashdata($sdata);
        redirect(base_url() ."header/","refresh");
    }

}