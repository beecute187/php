<?php
  if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hoten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $matkhau = sha1($_POST['matkhau']);
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$sdt."')");
    if($sql_dangky){
      echo '<p style="color:green">Bạn đã đăng ký thành công !</p>';
      $_SESSION['dangky'] = $tenkhachhang;
      $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
      header('Location:index.php?quanly=giohang');
    }
  }
?>
<p>Đăng ký thành viên</p>
<style type="text/css">
  td{
      padding: 5px;
  }
</style>
<form class="" action="" method="post">
  <table border="1" width="50%" style="border-collapse:collapse;">
    <tr>
      <td>Họ và tên</td>
      <td> <input type="text" name="hoten" size="75" value=""> </td>
    </tr>
    <tr>
      <td>Email</td>
      <td> <input type="text" name="email" size="75" value=""> </td>
    </tr>
    <tr>
      <td>Điện thoại</td>
      <td> <input type="text" name="sdt" size="75" value=""> </td>
    </tr>
    <tr>
      <td>Địa chỉ</td>
      <td> <input type="text" name="diachi" size="75" value=""> </td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td> <input type="text" name="matkhau" size="75" value=""> </td>
    </tr>
    <tr>
      <td> <input type="submit" name="dangky" value="Đăng ký"> </td>
      <td> <a href="index.php?quanly=dangnhap">Đã có tài khoản? Đăng nhập tại đây !</a> </td>
    </tr>
  </table>
</form>
