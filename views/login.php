<?php
    require_once("../vendor/autoload.php");

    use App\classes\user;
    
    $user = new user();
?>

<link href="../../public/css/bootstrap.min.css" rel="stylesheet">
<link href="../../public/css/style.css" rel="stylesheet">
<script src="../../public/js/bootstrap.min.js"></script>

<div class="container">
    <form method="post" action="">
        <div class="row">
            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
            <input type="email" class="form-control mb-3" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="row">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="row">
            <label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="password_conf" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-8">Submit</button>
    </form>
</div>