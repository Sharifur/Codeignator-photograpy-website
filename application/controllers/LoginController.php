<?php

/**
 * Created by PhpStorm.
 * User: MR.Rp
 * Date: 7/26/2017
 * Time: 10:19 PM
 */
class LoginController extends CI_Controller
{
    public function index(){
        $data = [];
        $this->load->view('backend/login' ,$data);
    }
    public function Admin_Login(){

        if($this->input->post('login') != null){

            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');

            if ($this->form_validation->run() != false){
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));

                $loged_user = $this->BM->View('users',['email'=>$email,'password'=>$password],"");

                if($loged_user){
                    foreach ($loged_user as $lg_user){
                        $userdata['myid'] = $lg_user->id;
                        $userdata['mytype'] = $lg_user->type;
                    }

                    $this->session->set_userdata($userdata);
                    redirect(base_url().'admin/dashboard','refresh');
                }else{
                    $sdata['msg'] = "Invalid Email Or Password Entered";
                    $this->session->set_flashdata($sdata);
                }

                redirect(base_url().'admin','refresh');
            }else{
                $data = [];
                $this->load->view('backend/login' ,$data);
            }

        }else{
            redirect(base_url().'admin','refresh');
        }

    }
    public function Admin_logout(){
        $userid = $this->session->userdata('myid');
        $usertype = $this->session->userdata('mytype');
        if($userid == null && $usertype != 'a'){
            redirect(base_url().'admin/login','refresh');
        }else{
            $this->session->unset_userdata('myid');
            $this->session->unset_userdata('mytype');
            redirect(base_url().'admin','refresh');
        }
    }
}