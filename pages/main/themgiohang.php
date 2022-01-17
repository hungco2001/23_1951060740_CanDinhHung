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
                   //liên kết dữ liệu nếu dữ liệu trùng thì số lượng +1
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
<header>
        <div class="d-grid gap-2 d-md-block">
            <div class="row"><button type="button" class="btn btn-primary "><a href="index.php"><img src="img/foody-corp.png" alt=""></a></button>
            

            </div>
    </header>
    <main>
        <div class="container">
            
        <form class="form-signin" action="process-singup.php" method="post">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btngiaohang" ><a href="index.php"></a> Trang chủ</button>
            <h1 class="h3 mb-3 font-weight-normal">Thông tin người nhận</h1>
            <label for="txturse" class="sr-only">Tên khách hàng</label>
            <input type="text" id="txturse" name="txturse" class="form-control" placeholder="Ursename" required autofocus>
            <label for="txturse" class="sr-only">Số điện thoại</label>
            <input type="text" id="txturse" name="txturse" class="form-control" placeholder="số điện thoại " required autofocus>
            <label for="txturse" class="sr-only">Địa chỉ nhận </label>
            <input type="text" id="txturse" name="txturse" class="form-control" placeholder="nơi nhận hàng" required autofocus>
            <label for="inputEmail" class="sr-only">Email Address</label>
            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
           
            <div class="checkbox mb-3">
               
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btngiaohang" >Đặt giao hàng</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
        </form>
        </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>