<?php
session_start()
?>
<p>giỏ hàng</p>
<?php
     if(isset($_SESSION['cart'])){
         
        
     }
?>
<table style="width:100%">
<tr>
    <th>id</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th> Số lượng</th>
    <th> Gía sản phẩm</th>
</tr>
<?php
  if(isset($_SESSION['cart'])){
      $i = 0 ;
      foreach($_SESSION['cart'] as $cart_item)
      {
          $i++;
          ?>
    <tr>
        <td><?php echo $i  ?></td>
        <td><?php echo $cart_item['masp']  ?></td>
        <td><?php echo $cart_item['tensanpham']  ?></td>
    </tr>
    <?php
      }
  }else{
      ?>
      <tr>
          <td colspan="6"><p>Hiện tại giỏ hàng trống</p></td>
      </tr>
      <?php
  }

?>

</table>