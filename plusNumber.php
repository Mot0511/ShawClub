<?php
  $name = $_GET['name'];
  $email = $_GET['email'];

  $link = mysqli_connect('localhost', 'root', '', 'shawclub');
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $cartProducts_res = mysqli_query($link, "SELECT * FROM cart WHERE email = '".$email."' AND name = '".$name."'");
  for ($cartProducts = []; $row = mysqli_fetch_assoc($cartProducts_res); $cartProducts[] = $row);

  $count = $cartProducts[0]['number'];


  mysqli_query($link, "DELETE FROM cart WHERE id = '".$cartProducts[0]['id']."'");
  $count = $count + 1;
  mysqli_query($link, "INSERT INTO cart SET id = '".$cartProducts[0]['id']."', name = '".$name."', number = ".$count.", email = '".$email."' ");
  echo '<script>location="cart.php?email='.$email.'"</script>';

  $link->close();

?>
