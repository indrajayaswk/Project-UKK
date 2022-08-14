<?php
    class Admin extends Controller{

        public function index(){
            $data['judul'] = 'Halaman Admin';
            $data['listpetugas'] = $this->model('Petugas_model')->getallpetugas();
            $this->view('templates/admin',$data);
            $this->view('Admin/index',$data);
            $this->view('templates/footer');
        }


        public function edit($id_petugas)
        {
            $data['judul']= 'Edit Petugas';
            $data['listpetugas'] = $this->model('Petugas_model')->getPetugasbyId($id_petugas);
            $this->view('templates/admin',$data);
            $this->view("admin/edit", $data);
            $this->view("templates/footer");
        }


        public function tambah(){
            $data['judul'] = 'Halaman Tambah Petugas';
            $this->view('templates/admin',$data);
            $this->view("admin/tambah");
            $this->view("templates/footer");
        }

        public function petugas(){
            if($this->model('Petugas_model')->addpetugas($_POST)>0){
                header('location:'.BASEURL.'admin');
            }
        }

        public function prosesEdit(){

            if($this->model('Petugas_model')->editPetugas($_POST)>0){
                header('location:'.BASEURL.'admin');
            }else{
                die("gagal Update!");
            }

        }   

        public function proseshapuspetugas($id_petugas){
            if($this->model('petugas_model')->hapuspetugas($id_petugas)>0){
                header('Location:'.BASEURL.'Admin');
            }
        }


        

        
    }


?>