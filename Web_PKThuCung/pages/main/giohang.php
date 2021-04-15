<?php
  if(isset($_SESSION['cart'])){

  }
?>

<table style="width:100%; text-align:center; border-collapse:collapse;" border="1">
  <tr>
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php
    if(isset($_SESSION['cart'])){
      $i = 0;
      $count = 0;
      foreach ($_SESSION['cart'] as $cart_item){
        $sum = $cart_item['soluong']*$cart_item['giasp'];
        $count+=$sum;
        $i++
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $cart_item['masp'] ?></td>
    <td><?php echo $cart_item['tensp'] ?></td>
    <td> <img src="admin_cp/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'] ?>" width="200px" alt=""></td>
    <td>
      <a style="text-decoration:none" href="pages/main/themgiohang.php?tang=<?php echo $cart_item['id'] ?>"><i class="far fa-plus-square"></i></a>
      <?php echo $cart_item['soluong'] ?>
      <a style="text-decoration:none" href="pages/main/themgiohang.php?giam=<?php echo $cart_item['id'] ?>"><i class="far fa-minus-square"></i></a>
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.') ?></td>
    <td><?php echo number_format($sum,0,',','.') ?></td>
    <td> <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a> </td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="8">
      <p style="float:left">Tổng tiền :  <?php echo number_format($count,0,',','.').' VND' ?></p>
      <p style="float:right"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá giỏ hàng</a></p>
      <div class="" style="clear:both;"></div>
      <?php if(isset($_SESSION['dangky'])){ ?>
      <p> <a href="pages/main/thanhtoan.php">Đặt hàng</a> </p>
      <?php }else{ ?>
      <p> <a href="index.php?quanly=dangky">Đăng ký để đặt hàng</a> </p>
      <?php } ?>
    </td>
  </tr>
  <?php
    }else{
  ?>
    <tr>
      <td colspan="8"> <p>Hiện tại giỏ hàng trống ! </p> </td>
    </tr>
  <?php } ?>
</table>
