<?php

class Home extends CI_Controller {
    public function index(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('home_view' , $data);
        $this->load->view('templates/footer');
    }

    public function account(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('account_view');

    }

    public function sounds(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('sounds_view');

    }

    public function genre(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('single_genre_view');

    }
}