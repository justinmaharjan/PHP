<?php
session_start();
$shoppingList =$_SESSION["array"] ?? [];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shopping</title>
</head>
<body>
  <main>
    <h1>Shopping Items</h1>
    <!-- form to submit -->
    <section>
      <form action="./add_to_cart.php" method="post">
        <input type="text" name = "shopping">
        <button type="submit">add to cart</button>
      </form>
    </section>
    <!-- list -->
    <section>
      <h4>Shopping list here</h4>
      <ul>
        <?php 
        foreach($shoppingList as $element){
          echo "<li>{$element}</li>";
        }
        ?>
      </ul>
    </section>
</main>
</body>
</html>