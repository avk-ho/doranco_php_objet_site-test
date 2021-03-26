<?php
    include('sidebar.php');
    require_once("../../vendor/autoload.php");

    use App\classes\products;

    $prod = new products();
    $allProd = $prod->getAll();
?>

<link href="style_admin.css" rel="stylesheet">

<body>
    <main>
        <h2>Liste des produits</h2>
        <?php foreach($allProd as $prod){
            ?>
        <div>
            <p>Nom : <?php echo "$prod->nom" ;?></p>
            <p>ID : <?php echo "$prod->id" ;?></p>
            <p>Prix : <?php echo "$prod->prix" ;?></p>
            <p>Description : <?php echo "$prod->description" ;?></p>
            <a name="update" href="update.php?id=<?php echo $prod->id ;?>">Editer les données</a>
            <a name="delete" href="delete.php?id=<?php echo $prod->id ;?>">Supprimer le produit</a>
            <hr>
        </div>
        <?php }?>
            <!-- <form method="post">
                <button type="submit" name="edit">Editer les données</button>
                <button type="submit" name="delete">Supprimer un produit</button>
            </form> -->
    </main>
</body>