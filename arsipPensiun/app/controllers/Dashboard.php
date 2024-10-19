<?php


class Dashboard extends Controller{



    public function index(){

        $data['judul'] = 'Dashboard';
        $data['cp'] = $this->model('Calonpensiun_model')->getAllcp();
        $this->view('template/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('template/footer');
        
    }


    public function page() {
        $this->view('about/page');
    }
}