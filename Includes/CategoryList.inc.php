<?php
$products = new ProductView;
?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $products->DisplayCategories();
    ?>
  </tbody>
</table>
