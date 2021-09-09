<?php 

    class Database{

        public function __construct(
           public string $dbhost = "localhost", 
           public string $dbName = "grup3", 
           public string $dbLast = "root", 
           public string $dbpass = "", 
        ){
           
        }

        public function connect(){
            try {
                $str = "mysql:host=".$this->dbhost.";dbname=".$this->dbName;
                $db = new PDO($str, $this->dbLast, $this->dbpass);
                return $db;
            } catch (\PDOException $th) {
                die("Sistem Bakım Hatası");

            }
        }


    }
