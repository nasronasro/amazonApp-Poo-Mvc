<?php
$products = new ProductView;
?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantite</th>
      <th scope="col">Category</th>
      <th scope="col">Zone Stockage</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $products->DisplayProducts();
    ?>
  </tbody>
</table>
