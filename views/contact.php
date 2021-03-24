<link href="../public/css/bootstrap.min.css" rel="stylesheet">
<script src="../public/js/bootstrap.min.js"></script>

<?php
    include("header.php");
?>

<div class="container">
<h2>Contact</h2>
    <form>
    <div class="row">
        <div class="col mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col mb-3">
            <label for="exampleInputPassword1" class="form-label">Prénom</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
    </div>
    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
