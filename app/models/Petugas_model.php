<?php

    class Petugas_model{

        public function __construct(){
            $this->db = new Database;
        }

        public function getallpetugas(){
            $this->db->query("SELECT * FROM petugas WHERE level= :level");
            $this->db->bind('level','petugas');

            return $this->db->resultSet();
        }

        public function addpetugas($data){
            $level ='petugas';
            $query = "INSERT INTO petugas
            VALUES
            ( :id_petugas, :nama_petugas, :username, :password, :telp, :level)";
            $this->db->query($query);
            $this->db->bind('id_petugas',rand());
            $this->db->bind('nama_petugas', $data['nama_petugas']);
            $this->db->bind('username',$data['username']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('telp', $data['telp']);
            $this->db->bind('level', $level);
            
            $this->db->execute();
    
            return $this->db->rowCount();
         }
         

         public function getPetugasbyId($id_petugas)
        {
            $this->db->query('SELECT * FROM petugas WHERE id_petugas= :id_petugas');
            $this->db->bind('id_petugas', $id_petugas);
            return $this->db->single();
        }


        public function editpetugas($data){

            $this->db->query('UPDATE petugas SET nama_petugas=:nama_petugas, username=:username, password=:password, telp=:telp WHERE id_petugas=:id_petugas');
            $this->db->bind('id_petugas',$data['id_petugas']);
            $this->db->bind('nama_petugas',$data['nama_petugas']);
            $this->db->bind('username',$data['username']);
            $this->db->bind('password',$data['password']);
            $this->db->bind('telp',$data['telp']);
            $this->db->execute();
            return $this->db->rowCount();


        }

        public function hapuspetugas($id_petugas){
            $this->db->query('DELETE FROM petugas WHERE id_petugas= :id_petugas');
            $this->db->bind('id_petugas',$id_petugas);
            $this->db->execute();
            return $this->db->rowCount();
        }



    }

?>