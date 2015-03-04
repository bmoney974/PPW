<?php

class Home extends CI_Controller {
    public function index(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('home_view' , $data);
d
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

    public function downloads(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('sound_list_view');

    }

    public function learning(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('learning_view');

    }

    public function topics(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('single_topic_view');

    }

    public function video(){
        $data['title'] = 'Sample Cutz';

        $this->load->view('templates/header', $data);

        $this->load->view('single_video_view');

    }
}