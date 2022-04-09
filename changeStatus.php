<?php
  $status = $_GET['status'];
  $id = $_GET['id'];
  $products = $_GET['products'];
  $number = $_GET['number'];
  $email = $_GET['email'];

  $link = mysqli_connect('localhost', 'root', '', 'shawclub');
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  mysqli_query($link, "DELETE FROM point WHERE id = '".$id."'");
  mysqli_query($link, "INSERT INTO point SET products = '".$products."', number = '".$number."', email = '".$email."', status = '".$status."'");

  echo '<script>location="point.php"</script>';
?>
