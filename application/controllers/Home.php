<?php
class Home extends CI_Controller{
    public function index(){
     // akses model
        
        $this->load->view('home/index');
        
    }
}
?> 