<?php 
    include('sidebar.php');
    require_once("../../vendor/autoload.php");

    use App\classes\products;

    $id = $_GET["id"];
    // echo $id;
    $prod = new products();
    if(isset($_POST["submit"])){
        $col = $_POST["colonne"];
        $val = $_POST["value"];
        // echo $col."<br>".$val;
        $prod->modifyById($id, $col, $val);
        // var_dump($prod->getById($id));
        header("Location:index.php");
    }
?>
<form method="post">
    <label for="colonne">Caractéristique (colonne) du produit à modifier</label>
    <input type="text" name="colonne">
    <br>
    <br>
    <label for="value">Nouvelle valeur à attribuer</label>
    <input type="text" name="value">
    <button type="submit" name="submit">Valider</button>
</form>