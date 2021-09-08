<?php 

    class Database{

        public function __construct(
           protected string $dbhost = "localhost", 
           protected string $dbName = "asd", 
           protected string $dbLast = "root", 
           protected string $dbpass = "", 
        ){

            try {
                $str = "mysql:host=".$this->dbhost.";dbname=".$this->dbName;
                $db = new PDO($str, $this->dbLast, $dbpass);
                echo "bağlandı";
            } catch (\Throwable $th) {
                die("Sistem Bakım Hatası");

            }

        }


    }

