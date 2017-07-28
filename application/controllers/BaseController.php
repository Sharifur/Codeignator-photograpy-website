<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
    public function index(){
        $data = [];
        $data['header'] = $this->BM->View('header',"",array('id','desc'));
        $data['about'] = $this->BM->View('about',array('id'=> '1'),'');
        $data['allservice'] = $this->BM->view('service',"",array('id','desc'));
        $data['gphotos'] = $this->BM->View('pgallery',"",['id','desc']);
        $data['allstats'] = $this->BM->View('stats',['id'=>'1'],"");
        $data['footer'] = $this->BM->View('footer',['id'=>'1'],"");
        $this->load->view('frontend/master',$data);
    }
}