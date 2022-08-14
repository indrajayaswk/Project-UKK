<?php
    class Petugas extends Controller{

        public function index(){
            $data['judul'] = 'Halaman Petugas';
            $data['pengaduan'] = $this->model('Pengaduan_model')->getAllpengaduan();
            $data['jmlh'] = $this->model('tanggapan_model')->jml_tanggapan();
            $this->view('templates/petugas',$data);
            $this->view('Petugas/index',$data);
            $this->view('templates/footer');
        }

        public function prosesgetidpengaduan($id_pengaduan){
            $data['judul'] = 'Halaman Detail';
           $data ['pengaduan'] = $this->model('Pengaduan_model')->getidpengaduan($id_pengaduan);
           $this->view('templates/petugas',$data);
            $this->view('Petugas/addtanggapan',$data);
            $this->view('templates/footer');
        }

        

        public function getidpengaduanforstatus($id_pengaduan){
            $data['judul'] = 'Halaman Status';
            $data['pengaduan'] = $this->model('pengaduan_model')->getidpengaduan($id_pengaduan);
            $this->view('templates/petugas',$data);
            $this->view('Petugas/detail',$data);
            $this->view('templates/footer');
        }
        
        public function prosesaddtanggapan(){
            if($this->model('Tanggapan_model')->addtanggapan($_POST)>0){
                header('Location:'.BASEURL.'petugas/index');
                exit;
            }
        }
    }


?>