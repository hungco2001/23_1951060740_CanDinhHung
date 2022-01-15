        <?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc= '$_GET[id]' ORDER BY id_sanpham DESC"; //sắp xếp sản phẩm
//   so sánh các id tương ứng giữa các bảng 
$query_pro = mysqli_query($mysqli, $sql_pro);
// get tên danh mục
// category thể loại 
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc= '$_GET[id]' LIMIT 1"; //sắp xếp sản phẩm
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

?>
<h3>Danh mục sản phẩm :<?php echo $row_title['tendanhmuc']  ?></h3> 
         <ul class="product_list">
            <?php
            while($row_pro = mysqli_fetch_array($query_pro)){
            ?>
            <li>
               <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                  <img src="quanly/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                  <p class="title_product"> <?php echo $row_pro['tensanpham'] ?></p>
                  <p class="price_product">  <?php echo number_format($row_pro['giasp']).'vnd' ?></p>
                  <p class="title_product"> <?php echo $row_pro['tomtat'] ?></p>
               </a>
            </li>
            <?php
            }
            ?>
         </ul>