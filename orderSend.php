<?php
  $email = $_GET['email'];
  $product = '';

  $link = mysqli_connect('localhost', 'root', '', 'shawclub');
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $res = mysqli_query($link, "SELECT * FROM cart WHERE email = '".$email."'");
  for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

  foreach ($data as $i){
    $product = $product.$i['name'].' '.(string) $i['number'].'x, ';
  }

  $number = rand(0, 999999);
  mysqli_query($link, "INSERT INTO point SET products = '".$product."', number = '".$number."', email = '".$email."'");
  echo '<script>location="profile.php"</script>';
?>
