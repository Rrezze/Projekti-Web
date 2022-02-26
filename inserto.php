<?php
    require_once 'Database.php';

    class Inserto{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from users');
            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO users(firstname,lastname,email,addres,upassword,roli) values (:firstname, :lastname,:email, :addres,:passwordi, 0)');
            $query->bindParam(':firstname',$request['firstname']);
            $query->bindParam(':lastname',$request['lastname']);
            $query->bindParam(':addres',$request['addres']);
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':passwordi',$request['passwordi']);

            $query->execute();

            return header('location: dashboard.php');
        }
        public function edit($email){
            $query = $this->db->pdo->prepare('SELECT * from users WHERE email= :email');
            $query->bindParam(':email',$email);
            $query->execute();

            return $query->fetch();
        }
        public function update($request,$email){
            $query = $this->db->pdo->prepare('UPDATE users SET firstname = :firstname,lastname = :lastname,addres = :addres, upassword=:passwordi ,roli=:roli where email=:email');
            $query->bindParam(':firstname',$request['firstname']);
            $query->bindParam(':lastname',$request['lastname']);
            $query->bindParam(':addres',$request['addres']);
            $query->bindParam(':passwordi',$request['passwordi']);
            $query->bindParam(':email',$email);
            $query->bindParam(':roli',$request['roli']);
            $query->execute();

            return header('location: sample.php');
        }

        public function delete($email){
            $query = $this->db->pdo->prepare('DELETE from users WHERE email = :email');
            $query->bindParam(':email',$email);
            $query->execute();

            return header('location: dashboard.php');
        }
    }
?>