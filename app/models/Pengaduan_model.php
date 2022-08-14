<?php
    class Pengaduan_model{

        public function __construct(){
            $this->db = new Database;
        }

        public function addpengaduan($data)
        {
            $status ="0";
            $ekstensi_valid = array('jpg','png');
            $nama_foto = $_FILES['foto']['name'];
            $x = explode('.',$nama_foto);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['foto']['size'];
            $temp = $_FILES['foto']['tmp_name'];

            if(in_array($ekstensi, $ekstensi_valid) === true){
                if($ukuran < 1044070){ 
                    move_uploaded_file($temp, '../public/img/'.$nama_foto);
                    $this->db->query("INSERT INTO pengaduan VALUE (:id_pengaduan,:tgl_pengaduan,:nik,:isi_laporan,:foto,:status)");
                    $this->db->bind('id_pengaduan',rand());
                    $this->db->bind('tgl_pengaduan',date('Y-m-d'));
                    $this->db->bind('nik',$_SESSION['data']['nik']);
                    
                    $this->db->bind('isi_laporan',$data['isi_laporan']);
                    $this->db->bind('foto',$nama_foto);
                    $this->db->bind('status',$status);
                    $this->db->execute();
                    return $this->db->rowCount();
                }else{
                echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
        }


        public function getAllpengaduanbynick(){
            $this->db->query("SELECT * FROM pengaduan WHERE nik =:nik");
            $this->db->bind('nik',$_SESSION['data']['nik']);
            return $this->db->resultSet();
        }

        public function getidpengaduan($id_pengaduan){
            $this->db->query('SELECT * FROM pengaduan WHERE id_pengaduan= :id_pengaduan');
            $this->db->bind('id_pengaduan',$id_pengaduan);
            return $this->db->single();
        }

        public function getAllpengaduan(){
            $this->db->query('SELECT * FROM pengaduan');
            return $this->db->resultset();
        }

        public function updatestatus($id_pengaduan){

            $selesai = "selesai";
            $this->db->query("UPDATE pengaduan SET status= :status WHERE id_pengaduan= :id_pengaduan");
            $this->db->bind('id_pengaduan',$id_pengaduan);
            $this->db->bind('status',$selesai);
            $this->db->execute();
            return $this->db->rowCount();

        }

        public function allpengaduanforlaporan(){

            $this->db->query("call`ambil_pengaduan`()");
            return $this->db->resultSet();

        }
        

        public function getpengaduanbybulan($data){
            $tanggal = $data['bulan'];
            $bulan = date('m', strtotime($tanggal));
            $tahun = date('Y', strtotime($tanggal));
            $this->db->query('SELECT * FROM pengaduan WHERE MONTH(tgl_pengaduan) = :bulan AND YEAR(tgl_pengaduan) = :tahun ');
            $this->db->bind('bulan', $bulan);
            $this->db->bind('tahun', $tahun);
            return $this->db->resultSet();
        }
    }
?>