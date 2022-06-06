<?php
$DBdata = [file_get_contents('data/hostDB.txt'), file_get_contents('data/loginDB.txt'), file_get_contents('data/passwordDB.txt'), file_get_contents('data/nameDB.txt')];
  $noList = $_GET['noList'];
  $newPointToList = $_GET['newPointToList'];

  array_push($noList, $newPointToList);

  $link = mysqli_connect($DBdata[0], $DBdata[1], $DBdata[2], $DBdata[3]);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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

  $ppoint = array_diff($ppoint, $noList);

  print_r($ppoint);
//   foreach ($points as $i){
//     foreach ($ppoints as $j){
//       if ($i == $j){
//         $numberPoints++;
//       }
//     }
//     $numberInPoints += [$i => $numberPoints];
//     $numberPoints = 0;
//   }
//
// asort($numberInPoints);

?>
