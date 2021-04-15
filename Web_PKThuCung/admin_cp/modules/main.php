<div class="clear">

</div>
<div class="main">
  <?php
  if(isset($_GET['action']) && $_GET['query']){
    $temp = $_GET['action'];
    $query = $_GET['query'];
  }else{
    $temp = '';
    $query = '';
  }
  if($temp == 'quanlydanhmucsanpham' && $query=='add'){
    include("modules/quanlydanhmuc/them.php");
    include("modules/quanlydanhmuc/lietke.php");
  }elseif ($temp == 'quanlydanhmucsanpham' && $query=='edit') {
    // code...
    include("modules/quanlydanhmuc/sua.php");
  }elseif ($temp == 'quanlysanpham' && $query=='add') {
    // code...
    include("modules/quanlysanpham/them.php");
    include("modules/quanlysanpham/lietke.php");
  }elseif ($temp == 'quanlysanpham' && $query=='edit') {
    // code...
    include("modules/quanlysanpham/sua.php");
  }
  else{
    include("modules/dashboard.php");
  }
  ?>
</div>
