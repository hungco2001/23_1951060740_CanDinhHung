<div id="main">
    <?php
    include("sidebar/sidebar.php");
    ?>
            
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly']))
                {
                    $tam=$_GET['quanly'];
                }
                else
                {
                    $tam ='';
                }
                if($tam=='danhmucsanpham')
                {
                    include("main/danhmuc.php");
                }

                else
                { include("main/index.php");}
                ?>
               
                </div>
            </div>