<?php
    class DaftarMasya_model{

        public function __construct(){
            $this->db = new Database;
        }

    public function addmasyarakat($data){
        $query = "INSERT INTO masyarakat
                        VALUES
                        ( :nik, :nama, :username, :password, :telpon)";
                        $this->db->query($query);
                        $this->db->bind('nik', $data['nik']);
                        $this->db->bind('nama', $data['nama']);
                        $this->db->bind('username',$data['username']);
                        $this->db->bind('password', $data['password']);
                        $this->db->bind('telpon', $data['telpon']);

        $this->db->execute();

        return $this->db->rowCount();
    } 
    }
?>