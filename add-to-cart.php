<?php
session_start();
if(isset($_POST['quantity']) && isset($_POST['product_id'])){
   $conn = mysqli_connect('localhost', 'root', '', 'bigfish');
   $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
   $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
   
   $sql = "INSERT INTO table_cart SET
   user_id = '".$_SESSION['user_id']."',
   product_id = '$product_id',
   quantity = '$quantity'
   ";
   
   if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header('Location: product.php?add=success');
      exit();
   }
}

?>