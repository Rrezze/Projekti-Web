<?php
    require_once 'Database.php';

    class ProduktetDatabase{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from produktet');
            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO produktet(produktetId,fotoProduktit,emriProduktit,qmimiProduktit) values (:produktetId, :fotoProduktit,:emriProduktit, :qmimiProduktit)');
            $query->bindParam(':produktetId',$request['produktetId']);
            $query->bindParam(':fotoProduktit',$request['fotoProduktit']);
            $query->bindParam(':emriProduktit',$request['emriProduktit']);
            $query->bindParam(':qmimiProduktit',$request['qmimiProduktit']);
            

            $query->execute();

            return header('location: dashboard.php');
        }
        public function edit($produktetId){
            $query = $this->db->pdo->prepare('SELECT * from produktet WHERE produktetId= :produktetId');
            $query->bindParam(':produktetId',$produktetId);
            $query->execute();

            return $query->fetch();
        }
        public function update($request,$produktetId){
            $query = $this->db->pdo->prepare('UPDATE users SET fotoProduktit = :fotoProduktit,emriProduktit = :emriProduktit,qmimiProduktit = :qmimiProduktit where produktetId=:produktetId');
            $query->bindParam(':fotoProduktit',$request['fotoProduktit']);
            $query->bindParam(':emriProduktit',$request['emriProduktit']);
            $query->bindParam(':qmimiProduktit',$request['qmimiProduktit']);
            $query->bindParam(':produktetId',$produktetId);
            $query->execute();

            return header('location: dashboard.php');
        }

        public function delete($produktetId){
            $query = $this->db->pdo->prepare('DELETE from produktet WHERE produktetId = :produktetId');
            $query->bindParam(':produktetId',$produktetId);
            $query->execute();

            return header('location: dashboard.php');
        }
    }
?>