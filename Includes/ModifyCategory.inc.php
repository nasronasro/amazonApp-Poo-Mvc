<?php

    include_once "Includer.inc.php";
    session_start();
    if(!isset($_POST["label"])&& !isset($_POST["idMod"])){
        header("location:../CategodyList.php");
        die();
    }else if(isset($_POST["label"])){
        $label = $_POST["label"];
        $id = $_SESSION["idModCate"];
        unset($_SESSION["idModCate"]);
        $product = new ProductView;
        $product->ModifyCategory($label,$id);
        header("location:../CategoryList.php");
        die();
    }else if(isset($_POST["idMod"])){
        $_SESSION["idModCate"] = $_POST["idMod"];
    }
?>
<form method="post" action="Includes/ModifyCategory.inc.php">
  <div class="form-group">
    <label for="LabelInput">Category name</label>
    <input type="text" class="form-control" name="label" id="LabelInput" placeholder="the new Category name" required>
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
<?php
