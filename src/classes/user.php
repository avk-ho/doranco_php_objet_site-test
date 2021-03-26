<?php
    namespace App\Classes;
    
    use PDO;
    use PDOException;

    class user extends database{
        
        const url_root = "localhost/blog/views";

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
            header("Location:login.php");
        }

        function getInfo(){
            $sql = "SELECT nom, prenom, email FROM users";
                $sth = $this->conn->query($sql);
                $sth->setFetchMode(PDO::FETCH_OBJ);
                return $sth->fetch();
                // echo "<pre>";
                // print_r($result);
                // echo "<pre>";
        }

        function createSession($user){
            $_SESSION["id"] = $user->id;
            $_SESSION["prenom"] = $user->prenom;
            $_SESSION["nom"] = $user->nom;
            $_SESSION["email"] = $user->email;
            header("Location:profil.php");
        }

        function login(){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password_conf = $_POST["password_conf"];
            if($password == $password_conf){
                $sql = "SELECT * FROM users WHERE email ='$email'"; // '' avant $email IMPORTANT
                $sth = $this->conn->query($sql);
                $sth->setFetchMode(PDO::FETCH_OBJ);
                $logs = $sth->fetch();
                $password_hash = $logs->password;
                if(password_verify($password, $password_hash)){
                    // echo "Connexion réussie.";
                    // header("Location:index.php");
                    $this->createSession($logs);
                }
                else{
                    echo "Erreur. Identifiants incorrects.";
                }
                
            }
            else{
                echo "Les mots de passe ne correspondent pas.";
            }          
        }

    }
?>