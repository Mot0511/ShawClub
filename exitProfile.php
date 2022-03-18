<?php
setcookie('login', '', time() + 1, '/');
echo '<script>location="index.php"</script>';
?>
