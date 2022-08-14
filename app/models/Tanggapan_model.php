<?php
    class Tanggapan_model{
        public function __construct(){
            $this->db = new Database;
        }
        
        public function addtanggapan($data){
            $this->db->query('INSERT INTO tanggapan VALUE (:id_tanggapan, :id_pengaduan, :tgl_tanggapan,:tanggapan,:id_petugas) ');
            $this->db->bind('id_tanggapan',rand());
            $this->db->bind('id_pengaduan',$data['id_pengaduan']);
            $this->db->bind('tgl_tanggapan',date('Y-m-d'));
            $this->db->bind('tanggapan',$data['tanggapan']);
            $this->db->bind('id_petugas',$_SESSION['petugas']['id_petugas']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function gettanggapanbyid($id_pengaduan){
            $this->db->query("SELECT * FROM tanggapan WHERE id_pengaduan=:id_pengaduan");
            $this->db->bind('id_pengaduan',$id_pengaduan);
            return $this->db->single();
        }
        

        public function jml_tanggapan(){
            $this->db->query("SELECT totaltanggapan()");
            $this->db->bind('totaltanggapan',$jmlh['hasil']);
            $this->db->execute();
            return $this->db->single();
        }




    }

?>