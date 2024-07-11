<?php
    include_once "Includer.inc.php";
    session_start();
    if(!isset($_POST["label"]) && !isset($_POST["idMod"])){
        header("location:../ProductList.php");
        die();
    }else if(isset($_POST["label"])){
        $label = $_POST["label"];
        $price = $_POST["price"];
        $qte = $_POST["quantite"];
        $id = $_SESSION["idModProd"];
        unset($_SESSION["idModProd"]);
        $product = new ProductView;
        $product->ModifyProduct($label,$qte,$price,$id);
        header("location:../ProductList.php");
        die();
    }else if(isset($_POST["idMod"])){
        $_SESSION["idModProd"] = $_POST["idMod"];
    }

?>
<form method="post" action="Includes/ModifyProduct.inc.php">
  <div class="form-group">
    <label for="LabelInput">Product name</label>
    <input type="text" class="form-control" name="label" id="LabelInput" placeholder="the new Product name" required>
  </div>
  <div class="form-group">
    <label for="priceInput">Price</label>
    <input type="number" class="form-control" name="price" id="priceInput" placeholder="new price" required>
  </div>
  <div class="form-group">
    <label for="quantiteInput">Quantite</label>
    <input type="number" class="form-control" name="quantite" id="quantiteInput" placeholder="new quantite" required>
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>


