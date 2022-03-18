<?php
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $id = $_GET['id'];
  $email = $_GET['email'];
  $link = mysqli_connect('localhost', 'root', '', 'shawclub');
  if ($link == false){
    print(mysqli_connect_error());
  }
  mysqli_set_charset($link, 'utf8');
  mysqli_query($link, "DELETE FROM cart WHERE id = '".$id."'");
  $res = mysqli_query($link, "SELECT * FROM cart WHERE id = '".$id."'");
  for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

  echo '<script>location="cart.php?email='.$email.'"</script>';
  $link->close();
?>
