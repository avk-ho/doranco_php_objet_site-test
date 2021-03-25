<?php
    include("header.php");
    require_once("../vendor/autoload.php"); //important, ne pas oublier

    // use App\classes\database;
    use App\classes\products;

    $prod = new products();
    $id = $_GET["id"];
    $detail = $prod->getById($id);
    //var_dump($prod->getById($id));

    //ici "submit" est le nom du bouton
    if(isset($_POST["submit"])){
        // echo $_POST["username"]."<br>";
        // echo $_POST["comment"];
        // echo "Submit succès";
        // die();
        $prod->sendCmt();
    }
?>

<link href="../public/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/style.css" rel="stylesheet">
<script src="../public/js/bootstrap.min.js"></script>

<!-- Display du produit -->
<div class="container">
    <h1>Détail du produit : <?php echo $detail->nom ;?></h1>
        <div class="row">
            <div class="col-md-7">
                <p>Description : <?php echo $detail->description ;?></p>
                <p>Prix : <?php echo $detail->prix ;?></p>
            </div>
            <div class="col-md-5 img_detail_main">
                <img src="../public/img/img1.jpg" alt="">
            </div>
        </div>

    <!-- Liste d'images -->
    <div class="row mt-5">
        <?php 
        $allImg = $prod->getImg($id);
        foreach($allImg as $img){
        ?>
        <div class="col img_detail text-center">
            <img src="../public/img/<?php echo $img->url ;?>" alt="">
        </div>
        <?php }?>
    </div>

    <!-- Submit commentaires -->
    <h2 class="mt-4">Commentaires</h2>
    <form method="post" action="">
    <div class="row">
        <div class="col-6 mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Commentaire</label>
        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <h3>Voici ce que d'autres utilisateurs en ont pensé</h3>
    <?php 
        $allCmt = $prod->getCmt($id);
        foreach($allCmt as $cmt){
    ?>
    <div class="row cmt">
        <div class="col-3 cmt-col">
            <p><?php echo $cmt->username ;?></p>
        </div>
        <div class="col-9 cmt-col">
        <p><?php echo $cmt->comment ;?></p>
        </div>
    </div>
    <?php }?>
</div>