<?php
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 8"; //sắp xếp sản phẩm
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<h3>Danh mục sản phẩm :<?php echo $row_title['tendanhmuc']  ?></h3> 
         <ul class="product_list">
            <?php
            while($row = mysqli_fetch_array($query_pro)){
            ?>
            <li>
               <a href="">
                  <img src="quanly/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                  <p class="title_product">tên sản phẩm : <?php echo $row_['tensanpham'] ?></p>
                  <p class="price_product"> giá sản phẩm : <?php echo number_format($row['giasp']).'vnd' ?></p>
                  <p><?php echo $row_pro['tendanhmuc'] ?></p>
               </a>
            </li>
            <?php
            }
            ?>
         </ul>