<?php
if(isset($_GET['trang'])){
   $page = $_GET['trang'];
}else{
   $page = '';
}
if($page == '' || $page == 1){
   $begin = 0 ; 
}else{
   $begin = ($page*10)-10;
}
$sql_pro = "SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC limit $begin,10"; //sắp xếp sản phẩm
$query_pro = mysqli_query($mysqli, $sql_pro);


?>
<h3> Sản phẩm mới nhất </h3> 
         <ul class="product_list">
            <?php
            while($row = mysqli_fetch_array($query_pro)){
            ?>
            <li>
               <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                  <img src="quanly/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                  <p class="title_product"> <?php echo $row['tensanpham'] ?></p>
                  <p class="price_product"> <?php echo number_format($row['giasp']).'vnd' ?></p>
                  <p style="text-align : center;color : #ddd"> <?php echo $row['tendanhmuc']?></p>
                 
               </a>
            </li>
            <?php
            }
            ?>
         </ul>
         <div style="clear: both;"></div> 
<!-- ngắt dòng  -->

<?php
$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count/10);
?>
<ul class="list_trang">
   <?php
   for($i=1;$i<=$trang;$i++)
   {
   ?>
   <li <?php if($i == $page)  {
      echo 'style = "background:#00FFFF;"';
      }?>>
   <a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
   <?php
   }
   ?>
</ul>
<style type= "text/css">
   ul.list_trang{
      padding: 0;
      margin: 0;
      list-style: none;
   }
   ul.list_trang li {
      float: left;
      padding: 5px 13px;
      margin: 5px;
      background-color: #F0F8FF;
      display: block;


   }
   ul.list_trang li a {
      color: #000;
      text-align: center;
      text-decoration: none;
   }

</style>