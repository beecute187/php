<?php
  if(isset($_GET['logout'])&&$_GET['logout']==1){
    unset($_SESSION['login']);
    header('Location:login.php');
  }
?>

<ul class="admin_list">
  <li><a href="index.php?action=quanlydanhmucsanpham&query=add">Quản lý danh mục sản phẩm</a></li>
  <li><a href="index.php?action=quanlysanpham&query=add">Quản lý sản phẩm</a></li>
  <li><a href="index.php?action=quanlybaiviet&query=add">Quản lý bài viết</a></li>
  <li><a href="index.php?action=quanlydanhmucbaiviet&query=add">Quản lý danh mục bài viết</a></li>
  <li><a href="index.php?logout=1">Đăng xuất</a></li>
</ul>
