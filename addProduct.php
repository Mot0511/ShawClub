<?php
$name = $_POST['name'];
$compound = $_POST['compound'];
$image = $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], 'img/products/'.$image);

$link = mysqli_connect('localhost', 'root', '', 'shawclub');
if ($link == false){
  print(mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');
$res = mysqli_query($link, "INSERT INTO products SET name='".$name."', compound='".$compound."', image='".$image."'") or die(mysqli_error($link));

echo '<script>location="admin.php"</script>';
$link->close();

?>
