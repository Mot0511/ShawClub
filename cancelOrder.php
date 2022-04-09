<?php
  $id = $_GET['id'];

  $link = mysqli_connect('localhost', 'root', '', 'shawclub');
  mysqli_query($link, "DELETE FROM point WHERE id = '".$id."'");
  echo '<script>location="profile.php"</script>';
?>
