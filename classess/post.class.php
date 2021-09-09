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

            return $data->fetchAll(PDO::FETCH_ASSOC);

        }

        public function Update($name, $content, $up_at, $id){

            $str = "UPDATE posts SET name = ?, content = ?, update_at = ? WHERE id = ?";
            $data = $this->connect()->prepare($str);
            $data->execute([
                $name,
                $content,
                $up_at,
                $id,
            ]);

            

        }


    }

    $Posts = new Posts();
    