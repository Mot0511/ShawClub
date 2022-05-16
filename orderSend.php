<?php
$DBdata = [file_get_contents('data/hostDB.txt'), file_get_contents('data/loginDB.txt'), file_get_contents('data/passwordDB.txt'), file_get_contents('data/nameDB.txt')];

  $email = $_POST['email'];
  $address = $_POST['address'];
  $product = '';
  $price = $_POST['price'];

  $link = mysqli_connect($DBdata[0], $DBdata[1], $DBdata[2], $DBdata[3]);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $res = mysqli_query($link, "SELECT * FROM cart WHERE email = '".$email."'");
  for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

  foreach ($data as $i){
    $product = $product.$i['name'].' '.(string) $i['number'].'x, ';
  }

  $number = rand(0, 999999);
  mysqli_query($link, "INSERT INTO point SET products = '".$product."', price = ".$price.", number = '".$number."', email = '".$email."', status = 0, address = '".$address."'");
  echo '<script>location="profile.php"</script>';
?>
