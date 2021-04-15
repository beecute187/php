<?php
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$pass."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
      $row_data = mysqli_fetch_array($row);
      $_SESSION['dangky'] = $row_data['tenkhachhang'];
      $_SESSION['id_khachhang'] = $row_data['id_dangky'];
      header("Location:index.php?quanly=giohang");
    }else{
      echo ' <p style="color:red">Email hoặc mật khẩu không đúng ! </p> ';
    }
  }
?>

<form class="" action="" method="post" autocomplete="off">
  <table border="1" width="50%" style="text-align:center">
    <tr>
      <td colspan="2"> <h3>LOGIN</h3> </td>
    </tr>
    <tr>
      <td>Email</td>
      <td> <input type="text" size="50" name="email" placeholder="Email..." value=""> </td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td> <input type="password" size="50" name="password" placeholder="Mật khẩu..." value=""> </td>
    </tr>
    <tr>
      <td colspan="2"> <input type="submit" name="login" value="Login"> </td>
    </tr>
  </table>
</form>
