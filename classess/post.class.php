<?php 
    include '../config/config.php';
    include __DIR__ . "./db.class.php";

    class Posts extends Database{

        public function index(){

            $str = "SELECT * FROM posts";
            $data = $this->connect()->query($str);

            return $data->fetchAll(PDO::FETCH_ASSOC);

        }

        public function Limit($id = null){
            $str = "SELECT * FROM posts WHERE id = ?";
            $data = $this->connect()->prepare($str);
            $data->execute([$id]);

            return $data->fetchAll(PDO::FETCH_ASSOC);  //fetch_assoc; veritabanı tablosundaki verileri isimleri ile getirir

        }

    }

    $Posts = new Posts();
    