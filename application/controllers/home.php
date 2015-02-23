<?php

class Home extends CI_Controller {
    public function index(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);
        $this->load->model('home_model');
        $data['msg']=$this->home_model->hello();
        $this->load->view('home_view' , $data);
        $this->load->view('templates/footer');
    }
}