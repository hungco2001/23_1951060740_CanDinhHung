<?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        
     ?>
<div class="menu">
            <ul class="list_menu">
             <li>
                 <img width="60px" height="30px" src="img/shope-food.png" alt="">
             </li>
             <li><a href="index.php">Trang chủ</a></li>
            
             <!-- <li><a href="index.php?quanly=tatca&id=1">Tất cả</a></li>
             <li><a href="index.php?quanly=doan">Đồ ăn </a></li>
             <li><a href="index.php?quanly=douong">Đồ uống </a></li>
             <li><a href="index.php?quanly=dochay">Đồ chay </a></li>
             <li><a href="index.php?quanly=banhkem">Bánh kem  </a></li>
             <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li> -->
             <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
            

            </ul>
            <p>
                <form action="index.php?quanly=timkiem" method="POST">
                
                    <input type ="text" placeholder="Tìm kiếm sản phẩm"name="tukhoa">
                    <input type="submit" name ="timkiem" value="Tìm kiếm" >
                
                </form>
            </p>
        </div>
        <div class="clear">
            <!-- ngắt các thẻ sau đổ về trái  -->
        </div>
