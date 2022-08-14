<?php
    class Login_model{
        public function __construct(){
            $this->db = new Database;
        }

        public function login($data){
            $this->db->query("SELECT * FROM masyarakat WHERE nik= :nik AND password= :password");
            $this->db->bind('nik',$data['id_pengguna']);
            $this->db->bind('password',$data['password']);

            $this->db->execute();
            return $this->db->single();
        }

        public function loginpetugas($data){
            $this->db->query("SELECT * FROM petugas WHERE username= :username AND password= :password");
            $this->db->bind('username', $data['id_pengguna']);
            $this->db->bind('password',$data['password']);

            $this->db->execute();
            return $this->db->single();
        }

    }

?>