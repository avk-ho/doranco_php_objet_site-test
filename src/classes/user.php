<?php
    namespace App\Classes;
    
    use PDO;
    use PDOException;

    class user extends database{
        function register(){
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $email = $_POST["email"];
            $sql = "INSERT INTO users(nom, prenom, password, email) VALUES ('$name','$surname','$password','$email')";
            // $this->conn->exec($sql);
            $sth = $this->conn->prepare($sql);

            // $sth->bindParam(':id_prod',$_GET['id']);
            // $sth->bindParam(':username',$_POST['username']);
            // $sth->bindParam(':comment',$_POST['comment']);
        
            $sth->execute();
        }
        function confirmPW(){
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $password_conf = password_hash($_POST["password_conf"], PASSWORD_DEFAULT);
            if($password == $password_conf){
                return true;
            }
            else{
                return false;
            }
        }
        // function allMails(){
        //     $sql = "SELECT email FROM users";
        //     $sth = $this->conn->query($sql);
        //     $sth->setFetchMode(PDO::FETCH_OBJ);
        //     return $sth->fetchAll();
        // }
        function login(){
            $email = $_POST["email"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $password_conf = password_hash($_POST["password_conf"], PASSWORD_DEFAULT);
            if(confirmPM()){
                $sql = "SELECT * FROM users WHERE email = $email";
                $sth = $this->conn->query($sql);
                $sth->setFetchMode(PDO::FETCH_OBJ);
                $logs = $sth->fetch();
                if($password == $logs->password){
                    $connexion = true;
                    echo "Connexion réussie.";
                }
                else{
                    echo "Erreur. Identifiants incorrects.";
                }
                
            }
            else{
                echo "The passwords do not match !";
            }
        }


    }
?>