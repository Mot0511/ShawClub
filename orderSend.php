<?php
$DBdata = [file_get_contents('data/hostDB.txt'), file_get_contents('data/loginDB.txt'), file_get_contents('data/passwordDB.txt'), file_get_contents('data/nameDB.txt')];

  $email = $_POST['email'];
  $address = $_POST['address'];
  $product = '';
  $price = $_POST['price'];
  $points = [];
  $ppoints = [];
  $numberPoints = 0;
  $numberInPoints = [];

  $link = mysqli_connect($DBdata[0], $DBdata[1], $DBdata[2], $DBdata[3]);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $res = mysqli_query($link, "SELECT * FROM cart WHERE email = '".$email."'");
  for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

  $ppoint_res = mysqli_query($link, "SELECT point FROM point");
  for ($ppoint = []; $row = mysqli_fetch_assoc($ppoint_res); $ppoint[] = $row);

  $point_res = mysqli_query($link, "SELECT email FROM users WHERE status = 2");
  for ($point = []; $row = mysqli_fetch_assoc($point_res); $point[] = $row);

  foreach ($ppoint as $i){
    array_push($ppoints, $i['point']);
  }

  foreach ($point as $i){
    array_push($points, $i['email']);
  }

  foreach ($points as $i){
    foreach ($ppoints as $j){
      if ($i == $j){
        $numberPoints++;
      }
    }
    $numberInPoints += [$i => $numberPoints];
    $numberPoints = 0;
  }

  for ($j = 0; $j < count($numberInPoints) - 1; $j++){
    for ($i = 0; $i < count($numberInPoints) - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($numberInPoints[$points[$i]] > $numberInPoints[$points[$i + 1]]){
            // меняем местами элементы
            $tmp_var = $numberInPoints[$points[$i + 1]];
            $numberInPoints[$points[$i + 1]] = $numberInPoints[$points[$i]];
            $numberInPoints[$points[$i]] = $tmp_var;
        }
    }
}
print_r($numberInPoints[array_key_first($numberInPoints)]);
  // echo '<br>';
  // foreach ($data as $i){
  //   $product = $product.$i['name'].' '.(string) $i['number'].'x, ';
  // }
  //
  // $number = rand(0, 999999);
  // mysqli_query($link, "INSERT INTO point SET products = '".$product."', price = ".$price.", number = '".$number."', email = '".$email."', status = 0, address = '".$address."', point = 'point'");
  // echo '<script>location="profile.php"</script>';
?>
