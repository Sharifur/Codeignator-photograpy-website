<?php

/**
 * Created by PhpStorm.
 * User: MR.Rp
 * Date: 7/25/2017
 * Time: 8:22 PM
 */
class PhotosController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $userid = $this->session->userdata('myid');
        $usertype = $this->session->userdata('mytype');
        if($userid == null && $usertype != 'a'){
            redirect(base_url().'admin/login','refresh');
        }
    }

    public function Index(){
        $data=[];
        $data['gphotos'] = $this->BM->View('pgallery',"",['id','desc']);
         $data['content'] = $this->load->view('backend/my-photos/index',$data,true);
        return $this->load->view('backend/master',$data);
    }
    public function Create(){
        $data=[];
        $data['content'] = $this->load->view('backend/my-photos/create',$data,true);
        return $this->load->view('backend/master',$data);
    }
    public function Store(){

        if($this->input->post('submit') != null){

            $this->form_validation->set_rules('caption','Caption','required');

            if (empty($_FILES['pic']['name'])){
                $this->form_validation->set_rules('pic', 'Picture', 'required');
           }

            if($this->form_validation->run() != false){

                $ext = ImageCheck($_FILES['pic']['name']);

                $data = [
                    'caption' => $this->input->post('caption'),
                    'picture' => $ext
                ];
                if($this->BM->Store('pgallery',$data)){
                    $id = $this->BM->Id;
                    if($ext){
                        $this->BM->FileUpload('./images/photos-gallery',"gall-pic-{$id}.{$ext}","pic");
                    }
                    $sdata['msg'] = 'Data Inserted Success';
                }
                $this->session->set_flashdata($sdata);
                redirect(base_url().'my-photos','refresh');
            }else{
                $data=[];
                $data['content'] = $this->load->view('backend/my-photos/create',$data,true);
                return $this->load->view('backend/master',$data);
            }

        }else{
            $data=[];
            $data['content'] = $this->load->view('backend/my-photos/create',$data,true);
            return $this->load->view('backend/master',$data);
        }
    }
    public function Edit($id){
        if (filter_var($id,FILTER_VALIDATE_INT)){
            $data = [];
            $data['allphotos'] = $this->BM->view('pgallery',['id'=>$id],"");
            $data['content'] = $this->load->view('backend/my-photos/edit',$data,true);
            return $this->load->view('backend/master',$data);
        }
    }
    public function Update($id){
        if(filter_var($id,FILTER_VALIDATE_INT)){
            if($this->input->post('submit') != null){
                $this->form_validation->set_rules('caption','Caption','required');
                if($this->form_validation->run() != false){
                    $allpic = $this->BM->View('pgallery',['id'=>$id],"");
                    foreach ($allpic as $pic){
                        $old_ext = $pic->picture;
                    }
                        $ext = $_FILES['pic']['name'];
                    if($ext == ""){
                        $ext = $old_ext;
                    }else{
                        $ext = ImageCheck($_FILES['pic']['name']);
                        if ($ext == ""){
                            $ext = $old_ext;
                        }else {
                            if (file_exists("images/photos-gallery/gall-pic-{$id}.{$old_ext}")) {
                                unlink("images/photos-gallery/gall-pic-{$id}.{$old_ext}");
                                $this->BM->FileUpload('./images/photos-gallery', "gall-pic-{$id}.{$ext}", "pic");
                            }else{
                                $this->BM->FileUpload('./images/photos-gallery', "gall-pic-{$id}.{$ext}", "pic");
                            }

                        }
                    }
                    $data = [
                        'caption'=> $this->input->post('caption'),
                        'picture' => $ext
                        ];
                    if($this->BM->Update('pgallery',['id'=>$id],$data)){
                        $sdata['msg'] = "Data Update Success";
                    }
                    $this->session->set_flashdata($sdata);
                    redirect(base_url().'/my-photos','refresh');

                }else{
                    $data = [];
                    $data['allphotos'] = $this->BM->view('pgallery',['id'=>$id],"");
                    $data['content'] = $this->load->view('backend/my-photos/edit',$data,true);
                    return $this->load->view('backend/master',$data);
                }
            }else{
                $data = [];
                $data['allphotos'] = $this->BM->view('pgallery',['id'=>$id],"");
                $data['content'] = $this->load->view('backend/my-photos/edit',$data,true);
                return $this->load->view('backend/master',$data);
            }
        }
    }
    public function Delete($id)
    {
        if (filter_var($id, FILTER_VALIDATE_INT)) {
            $allpic = $this->BM->View('pgallery', ['id' => $id], "");
            foreach ($allpic as $pic) {
                $old_ext = $pic->picture;
            }
            if ($this->BM->Delete('pgallery', ['id' => $id])) {
                if (file_exists("images/photos-gallery/gall-pic-{$id}.{$old_ext}")) {
                    unlink("images/photos-gallery/gall-pic-{$id}.{$old_ext}");
                    $this->session->set_flashdata('msg', 'Data Deleted Successfully');
                }
                redirect(base_url() . 'my-photos', 'refresh');
            }
        }
    }
}
