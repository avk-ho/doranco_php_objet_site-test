<?php
    include("header.php");
    require_once("../vendor/autoload.php");

    use App\classes\user;

    $user = new user();

    if(isset($_POST["submit"])){
        // echo $_POST["name"]."<br>";
        // echo $_POST["surname"]."<br>";
        // echo $_POST["password"]."<br>";
        // echo $_POST["mail"]."<br>";
        // echo "Submit success";
        // die();

        $user->register();
        
    }
?>
<link href="../../public/css/bootstrap.min.css" rel="stylesheet">
<link href="../../public/css/style.css" rel="stylesheet">
<script src="../../public/js/bootstrap.min.js"></script>

<div class="container">
    <form method="post" action="">
        <div class="row">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" required="required" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="row">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" required="required" name="surname" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="row">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" required="required" name="password" id="exampleInputPassword1">
        </div>
        <div class="row">
            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
            <input type="email" class="form-control mb-3" required="required" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-8">Submit</button>
    </form>
</div>