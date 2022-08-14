<?php

    class Laporan extends Controller{

        public function index(){
            $data['judul'] = 'Halaman Laporan';
            $data['pengaduan']= $this->model('Pengaduan_model')->allpengaduanforlaporan();
            $this->view('templates/laporan',$data);
            $this->view('laporan/index',$data);
            $this->view('templates/footer');
        }

        public function laporanpilih(){
            $data['judul'] = 'Halaman Laporan';
            $data['pengaduan']=$this->model('pengaduan_model')->getpengaduanbybulan($_POST);
            $this->view('templates/laporan',$data);
            $this->view('laporan/index',$data);
            $this->view('templates/footer');
        }

        public function cetak(){
            $data['judul'] = 'Cetak Laporan';
            $data['pengaduan']= $this->model('Pengaduan_model')->allpengaduanforlaporan();
            
            $this->view('templates/header',$data);
            $this->view('laporan/cetaklaporan',$data);
            $this->view('templates/footer');
        }




    }

?>