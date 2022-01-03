<?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        
     ?>
<div class="menu">
            <ul class="list_menu">
             <li>
                 <img width="60px" height="30px" src="img/shope-food.png" alt="">
             </li>
             <?php
             while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
             ?>
             <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc'] ?> </a></li>
            <!-- mỗi danh mục hiện thị id riêng -->
            <?php
             }
             ?>
             <!-- <li><a href="index.php?quanly=tatca&id=1">Tất cả</a></li>
             <li><a href="index.php?quanly=doan">Đồ ăn </a></li>
             <li><a href="index.php?quanly=douong">Đồ uống </a></li>
             <li><a href="index.php?quanly=dochay">Đồ chay </a></li>
             <li><a href="index.php?quanly=banhkem">Bánh kem  </a></li>
             <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li> -->

            </ul>

        </div>
        <div class="clear">
            <!-- ngắt các thẻ sau đổ về trái  -->
        </div>
