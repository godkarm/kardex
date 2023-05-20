<?php
    class db{
        private $host="localhost";
        private $dbname="kardex";
        private $user="root";
        private $password="deybis3315$";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
                //throw $th;
            }
        }
    
    }
    $obj = new db();
    print_r($obj->conexion());

?>