<?php
    namespace App\Classes;

    use App\classes\database;
    use PDO;
    use PDOException;

    class products extends database{
        function getAll(){
            // $req = $this->conn->prepare("SELECT * FROM products");
            // $req->execute();
            // $result = $req->fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            // print_r($result);
            // echo "<pre>";

            $sql = "SELECT * FROM products";
            $sth = $this->conn->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            return $sth->fetchAll();
        }
    }

?>