
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lien bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <!-- <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <script src="../public/js/bootstrap.min.js"></script> -->

    <title>Document</title>
</head>
<body>
<?php
    include('header.php');
    require_once("../vendor/autoload.php");
    use App\classes\database;
    use App\classes\products;
    $db = new database();
    $prod = new products();
    // var_dump($prod->getAll());
?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../public/img/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../public/img/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../public/img/img1.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="container mt-4">
        <div class="row">
            <?php
            $allprod = $prod->getAll();
            foreach($allprod as $prod){
            ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../public/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prod->nom ;?></h5>
                        <p class="card-text"><?php echo $prod->description ;?></p>
                        <p>Prix : <?php echo $prod->prix ;?></p>
                        <a href="detail.php?id=<?php echo $prod->id ;?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            <!-- <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../public/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../public/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
        </div>       
    </div>
    
</body>
</html>