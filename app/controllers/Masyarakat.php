<?php
class Masyarakat extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Masyarakat';
        $data['isipengaduan']=$this->model('Pengaduan_model')->getAllpengaduanbynick();
        $this->view('templates/masyarakat',$data);
        $this->view('Masyarakat/index',$data);
        $this->view('templates/footer');
    }

    public function getidtanggapan($id_pengaduan){
        if($data['tanggapan'] = $this->model('Tanggapan_model')->gettanggapanbyid($id_pengaduan))
        {
            $data['judul'] = 'Halaman Detail';
            $this->view('templates/masyarakat',$data);
            $this->view('masyarakat/detail',$data);
            $this->view('templates/footer');
        }else{
            
            die('Pengaduan Anda Belum diproses!');
            
        }
    }

    public function tambahpengaduan(){
        $data['judul'] = 'halaman Tambah Pengaduan';
            $this->view('templates/masyarakat',$data);
            $this->view('masyarakat/tambah');
            $this->view('templates/footer');
    }



}
?>