<?php
    include("header.php");
    require_once("../vendor/autoload.php");

    use App\classes\user;
    
    // $user = new user();
    // $infos = $user->getInfo();
    // var_dump($_SESSION);
    if(!isset($_SESSION["id"])){
        header("Location:login.php");
    }
?>

<!-- <p>Nom : <?php echo $infos->nom ;?></p>
<p>Prénom : <?php echo $infos->prenom ;?></p>
<p>Email : <?php echo $infos->email ;?></p> -->

<p>Nom : <?php echo $_SESSION['nom'] ;?></p>
<p>Prénom : <?php echo $_SESSION['prenom'] ;?></p>
<p>Email : <?php echo $_SESSION['email'] ;?></p>

<!-- <a href="logout.php">Se déconnecter</a> -->