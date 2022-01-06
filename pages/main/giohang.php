<!-- giỏ hàng  -->
<p>giỏ hàng</p>
<?php
    session_start();
?>
<p>giỏ hàng</p>
<?php
     if(isset($_SESSION['cart'])){
         
         print_r($_SESSION['cart']);
     }
?>