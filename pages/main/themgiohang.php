<?php
   session_start(); // lưu vào 1 session 
   include('../../quanly/config/config.php');
   // thêm sản phẩm vào giỏ hàng
   if(isset($_POST['themgiohang']))//nếu tồn tại giỏ hàng thì ta tiếp tục thêm 
   {  // session_destroy(); //xóa cái sesion cũ or bị lỗi
       $id=$_GET['idsanpham'];
       $soluong =1 ;
       $sql = " SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
       //chọn sản phẩm và chỉ 1 cái 1 
       $query = mysqli_query( $mysqli ,$sql); // kết ns vs ssql 
       $row = mysqli_fetch_array($query);
       if($row){
           $new_product = array(array('tesanpham'=> $row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasp'=>$row['giasp'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
           //kiểm tra session giỏ hàng tồn tại 
           if (isset($_SESSION['cart'])){
               $found = false ;
               foreach($_SESSION['cart'] as $cart_item){
                   //nếu dữ liệu trùng số lượng +1
                   if($cart_item['id']== $id){
                       $product[]=array('tesanpham'=> $cart_item['tensanpham'],'id'=>$cart_item['id'],
                       'soluong'=>$soluong+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                       $found =true;
                   }else{
                       //nếu dữ liệu trùng
                    $product[]=array('tesanpham'=> $cart_item['tensanpham'],'id'=>$cart_item['id'],
                    'soluong'=>$soluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
               
                   }
               }  // nếu sesion tồn tại thì chạy hết phần true còn k chạy tiếp false
               if($found==false){
                   $_SESSION['cart']=array_merge($product,$new_product);
                //    dữ liệu k tìm thấy or k chùng thì liên kết 2 mảng trên vs nhau vì ms đầu nó đã tạo cho ta cái mảng cái sản phẩm đó r 
               }
               else{
                $_SESSION['cart']=$product;
               }
           }else{
               $_SESSION['cart'] = $new_product;
       }
       
    }
    header('Location:../../index.php?quanly=giohang');
}
?>