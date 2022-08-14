<?php
    class Login extends Controller{

        public function index(){
            
            $this->view('Login/index');
            $this->view('templates/footer');
        }

        public function proseslogin(){
            if ($this->model('Login_model')->login($_POST) !=null){
                $data['masyarakat'] = $this->model('Login_model')->login($_POST);
                $_SESSION['data']= $data['masyarakat'];
               header ('location:' . BASEURL . 'masyarakat'); 
    
            }else if($this->model('Login_model')->loginpetugas($_POST) !=null){
                $data['petugas'] = $this->model('Login_model')->loginpetugas($_POST);
                $_SESSION['petugas']= $data['petugas'];
                
                $cek = $this->model('login_model')->loginpetugas($_POST);
                
                if($cek ['level'] == 'admin'){
                    header("location:".BASEURL."admin");
                }else if($cek ['level'] == 'petugas'){
                    header("location:".BASEURL.'petugas');
                }
        }
        else{
             die('Gagal Login');
            }
    }


    public function logout(){
        unset($_SESSION['petugas']);
        unset($_SESSION['data']);
        header('Location:'.BASEURL);
    }

    
}