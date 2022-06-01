<?php
$DBdata = [file_get_contents('data/hostDB.txt'), file_get_contents('data/loginDB.txt'), file_get_contents('data/passwordDB.txt'), file_get_contents('data/nameDB.txt')];

  $status = $_GET['status'];
  $id = $_GET['id'];
  $products = $_GET['products'];
  $number = $_GET['number'];
  $email = $_GET['email'];
  $page = $_GET['page'];
  $address = $_GET['address'];
  $price = $_GET['price'];
  $point = $_GET['point'];
  $carrier = $_GET['carrier'];

  $link = mysqli_connect($DBdata[0], $DBdata[1], $DBdata[2], $DBdata[3]);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  mysqli_query($link, "DELETE FROM point WHERE id = '".$id."'");
  if ($status == 2){
    mysqli_query($link, "INSERT INTO point SET products = '".$products."', price = ".$price.", number = '".$number."', email = '".$email."', status = '".$status."', address = '".$address."', point = '".$point."', carrier = '".$carrier."'");
  }
  else if ($status >= 2 and $status != 3){
    $res = mysqli_query($link, "SELECT carrier FROM point WHERE id = '".$id."'");
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

    mysqli_query($link, "INSERT INTO point SET products = '".$products."', price = ".$price.", number = '".$number."', email = '".$email."', status = '".$status."', address = '".$address."', point = '".$point."', carrier = '".$carrier."'");
  }
  else{
    mysqli_query($link, "INSERT INTO point SET products = '".$products."', price = ".$price.", number = '".$number."', email = '".$email."', status = '".$status."', address = '".$address."', point = '".$point."', carrier = '".$carrier."'");
  }

  echo '<script>location="'.$page.'.php"</script>';

?>
