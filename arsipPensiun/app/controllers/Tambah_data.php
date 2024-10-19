<?php

class Tambah_data extends Controller{


    // halaman utama dari Tambah Data
    public function index() {


        $data['judul'] = 'Data Calon Pensiun';
        $this->view('template/header', $data);
        $this->view('tambahData/index');
        $this->view('template/footer');
    }



    // menghubungkan ke halaman input dpcp
    public function input_dpcp(){

        $data['judul'] = 'Input Data Calon Pensiun';
        $this->view('template/header', $data);
        $this->view('tambahData/input_dpcp');
        $this->view('template/footer');


    }

    // detail caloon pensiun
    public function detail($nip){

        $data['judul'] = 'Detail Data Calon Pensiun';
        $data['cp'] = $this->model('Calonpensiun_model')->getcpById($nip);
        $this->view('template/header', $data);
        $this->view('tambahData/detail', $data);
        $this->view('template/footer');


    }
     // hapus
     public function hapus($nip) {
        if($this->model('Calonpensiun_model')->hapusDatacp($nip) > 0){
            header('Location:'. BASEURL . '/dashboard');
            exit;
        }else{
            header('Location:'. BASEURL. '/dashboard');
            exit;
        }
     }

    // tambah dpcp
    public function tambah(){
        if ( $this->model('Calonpensiun_model')->input_dpcp($_POST) > 0 ){
            header('Location:'. BASEURL. '/dashboard');
            exit;
        }
    }

    // menghubungkan ke data_riwayat pekerjaan
    public function data_riwayatPekerjaan($judul = '') {

        $data['judul'] = 'Data Riwayat Pekerjaan';
        $this->view('template/header', $data);
        $this->view('tambahData/data_riwayatPekerjaan');
        $this->view('template/footer');
    }

    // menhubungkan ke data_daftarKeluarga
    public function data_daftarKeluarga($judul = ''){

        $data['judul'] = 'Data Daftar Keluarga';
        $this->view('template/header', $data);
        $this->view('tambahData/data_daftarKeluarga');
        $this->view('template/footer');
    } 

}