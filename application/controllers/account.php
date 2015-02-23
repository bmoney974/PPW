<?php
class Account extends CI_Controller {
    public function my_account(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('account_view');
        $this->load->view('templates/footer');
    }
}