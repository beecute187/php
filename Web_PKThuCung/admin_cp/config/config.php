<?php
  $mysqli = new mysqli("localhost","root","","db_pktc");
  if($mysqli->connect_errno){
    echo "Lỗi kết nối database".$mysqli->connect_errno;
    exit();
  }
?>
