<p>chi tiết sản phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
and tbl_sanpham.id_sanpham='$_GET[id]'  limit 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="wapper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="80%" src="quanly/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
        </div>
        <form action="#" method="post">
        <div class="chitiet_sanpham">
            <!-- tên sản phẩm :  -->
            <h3><?php echo $row_chitiet['tensanpham'] ?> </h3>
            <!-- mã sản phẩm -->
            <p> Mã sản phẩm :<?php echo $row_chitiet['masp'] ?></p>
            <!-- giá sản phẩm -->
            <p>Giá :<?php echo number_format($row_chitiet['giasp']) . 'vnd' ?></p>
            <p> Số lượng sản phẩm :<?php echo $row_chitiet['soluong'] ?></p>
            <p><?php echo $row_chitiet['tendanhmuc'] ?></p>
            <p>Địa chỉ :<?php echo $row_chitiet['noidung'] ?></p>
            <p class="themvaogiohang"><input type="submit" value="Thêm vào giỏ hàng"></p>
        </div>
        </form>
    </div>
<?php
}
?>