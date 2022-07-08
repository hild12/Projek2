<?php
class Kegiatan extends CI_Controller{
    public function index(){
     // akses model

     $this->load->model('kegiatan_model');
     $kegiatan = $this->kegiatan_model->getAll();
     $data['kegiatan'] = $kegiatan;
        
        $this->load->view('layout/header');
        $this->load->view('layout/side');
        $this->load->view('kegiatan/index', $data);
        $this->load->view('layout/footer');

    }
    public function detail($id){
        // akses model kegiatan
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getById($id);
        $data['kegiatan'] = $kegiatan;

         $this->load->view('layout/header');
         $this->load->view('layout/side');
         $this->load->view('kegiatan/detail', $data);
         $this->load->view('layout/footer');
     }
    
}
?>