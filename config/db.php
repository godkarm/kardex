<?php
    class db{
        private $host="localhost";
        private $dbname="kardex";
        private $user="root";
        private $password="passw0rd";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>