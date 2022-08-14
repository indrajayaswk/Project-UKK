<?php
class Daftar extends Controller{
    public function index(){
        
        $this->view('Daftar/index');
        $this->view('templates/footer');
    }

    public function add()
    {
        if($this->model('DaftarMasya_model')->addmasyarakat($_POST)> 0){
            
            header('Location:' . BASEURL . 'Login/login');
            exit;
        }else{
            die('Gagal');
        }
    }



}


