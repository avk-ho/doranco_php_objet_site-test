<?php

    namespace App\Classes;
    
    use PDO;
    use PDOException;

    class database{
        
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "demo";
        protected $conn;

        function __construct(){
            try{
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                // echo "Connexion réussie<br>";
    
            }   
            catch(PDOException $e){
                echo "Erreur".$e->getMessage();
            }
        }
        
    }

?>