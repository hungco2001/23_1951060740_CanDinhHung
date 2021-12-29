<!-- kết nối vs database mysql -->
<?php
$mysqli = new mysqli("localhost","root","","web_foody_mysqli");

// Check connection
if ($mysqli -> connect_errno) {
  echo "kết nối mysqli lỗi" . $mysqli -> connect_error;
  exit();
}
?>