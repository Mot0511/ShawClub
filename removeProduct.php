<?php
$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', 'shawclub');
if ($link == false){
  print(mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');
$res = mysqli_query($link, "DELETE FROM products WHERE id=".$id."") or die(mysqli_error($link));

$link->close();

?>
