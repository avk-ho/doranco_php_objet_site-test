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
            return $sth->fetchAll(); // All, retourne un array
        }
        function getById($id){
            $sql = "SELECT * FROM products WHERE id=$id";
            $sth = $this->conn->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            return $sth->fetch(); // retourne juste un objet
        }

        function deleteById($id){
            $sql = "DELETE FROM products WHERE id='$id'";
            $sth = $this->conn->prepare($sql);
            $sth->execute();
        }
        function modifyById($id, $col, $new_val){
            $sql = "UPDATE products SET $col = $new_val WHERE id = '$id'";
            $sth = $this->conn->prepare($sql);
            $sth->execute();
        }

        function getImg($id){
            $sql = "SELECT img_products.url FROM img_products INNER JOIN products ON img_products.id_prod = products.id WHERE id_prod=$id";
            $sth = $this->conn->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            return $sth->fetchAll();
        }

        function sendCmt(){
            $id = $_GET["id"];
            $username = $_POST["username"];
            $comment = $_POST["comment"];
            $sql = "INSERT INTO comments_products(id_prod, username, comment) VALUES ('$id','".$username."','".$comment."')";
            // $this->conn->exec($sql);
            $sth = $this->conn->prepare($sql);

            $sth->bindParam(':id_prod',$_GET['id']);
            $sth->bindParam(':username',$_POST['username']);
            $sth->bindParam(':comment',$_POST['comment']);
        
            $sth->execute();
        }
        function getCmt($id){
            $sql = "SELECT * FROM comments_products INNER JOIN products ON comments_products.id_prod = products.id WHERE id_prod=$id";
            $sth = $this->conn->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            return $sth->fetchAll();
        }

    }

?>