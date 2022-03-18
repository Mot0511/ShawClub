<?php
  $name = $_GET['name'];
  $email = $_GET['email'];

  $link = mysqli_connect('localhost', 'root', '', 'shawclub');

  $res = mysqli_query($link, "INSERT INTO cart SET name = '".$name."', email = '".$email."'");
  echo '<script>location="index.php"</script>';

  $link->close();
?>
