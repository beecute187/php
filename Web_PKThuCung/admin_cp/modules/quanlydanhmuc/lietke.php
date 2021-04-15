<?php
  $sql_lietke_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
  $query_lietke_danhmuc = mysqli_query($mysqli,$sql_lietke_danhmuc);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
  </tr>
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
      // code...
      $i++;

  ?>
  <tr>
    <td><?php echo $i ?> </td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
      <a href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a> | <a href="?action=quanlydanhmucsanpham&query=edit&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
<?php } ?>
</table>
