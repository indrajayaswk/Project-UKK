<?php
    class Pengaduan  extends Controller{
        public function prosesaddpengaduan(){
        if($this->model('Pengaduan_model')->addpengaduan($_POST)>0){
            header('Location:'.BASEURL.'masyarakat');
            exit;
        }else{
            die('error');
        }    
    }

         public function prosesupdatestatus($id_pengaduan){
        if($this->model('Pengaduan_model')->updatestatus($id_pengaduan) > 0){
           header('Location:'.BASEURL.'petugas/index');
           exit;
        }else{
            die('Status Telas Selesai DiProses!');  
        }
    }

    


    }
?>