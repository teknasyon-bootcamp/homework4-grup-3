<?php 

    class Database{

        public function __construct(
           protected string $dbhost = "mariadb", 
           protected string $dbName = "default", 
           protected string $dbLast = "default", 
           protected string $dbpass = "secret", 
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

