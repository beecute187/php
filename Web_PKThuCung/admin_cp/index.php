<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Admin CP</title>
  </head>
  <?php
    session_start();
    if(!isset($_SESSION['login'])){
      header('Location:login.php');
    }

  ?>
  <body>
    <h3 class="title_admin">Welcome to AdminCP</h3>
    <div class="wrapper">
    <?php
      include("config/config.php");
      include("modules/header.php");
      include("modules/menu.php");
      include("modules/main.php");
      include("modules/footer.php");
    ?>
    </div>
  </body>
</html>
