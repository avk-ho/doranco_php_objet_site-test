<?php 
    include('sidebar.php');
    require_once("../../vendor/autoload.php");

    use App\classes\products;

    $id = $_GET["id"];
    // echo $id;
    $prod = new products();
    var_dump($prod->getById($id));
    if(isset($_POST["submit"])){
        $confirm = $_POST["confirm"];
        if($confirm == "supprimer"){
            $prod->deleteById($id);
            header("Location:index.php");
        }
    }
?>
<form method="post">
    <label for="confirm">Pour supprimer, taper supprimer dans le champ suivant</label>
    <input type="text" name="confirm">
    <button type="submit" name="submit">Valider</button>
</form>