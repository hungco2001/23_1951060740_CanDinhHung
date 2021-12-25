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
                if($tam=='tatca')
                {
                    include("main/tatca.php");
                }
                elseif( $tam =='giohang')
                include("main/giohang.php");
                elseif( $tam =='doan')
                include("main/doan.php");
                elseif( $tam =='douong')
                include("main/douong.php");
                elseif( $tam =='dochay')
                include("main/dochay.php");
                elseif( $tam =='banhkem')
                include("main/dochay.php");
                else
                { include("main/index.php");}
                ?>
                
                </div>
            </div>