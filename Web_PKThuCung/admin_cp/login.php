<?php
  session_start();
  include('config/config.php');
  if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = sha1($_POST['password']);
    $sql = "SELECT * FROM tbl_admin WHERE username='".$user."' AND password='".$pass."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
      $_SESSION['login'] = $user;
      header("Location:index.php");
    }else{
      echo '<script>alert("Tài khoản hoặc mật khẩu không đúng !")</script>';
      header("Location:login.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <style type="text/css">
      body{
        background:#f2f2f2;
      }

      .wrapper{
        width:15%;
        margin: 0 auto;
      }

      td {
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <form class="" action="" method="post" autocomplete="off">
        <table border="1" style="text-align:center">
          <tr>
            <td colspan="2"> <h3>LOGIN</h3> </td>
          </tr>
          <tr>
            <td>Username</td>
            <td> <input type="text" name="username" value=""> </td>
          </tr>
          <tr>
            <td>Password</td>
            <td> <input type="password" name="password" value=""> </td>
          </tr>
          <tr>
            <td colspan="2"> <input type="submit" name="login" value="Login"> </td>
          </tr>
        </table>
      </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

    </script>
  </body>
</html>
