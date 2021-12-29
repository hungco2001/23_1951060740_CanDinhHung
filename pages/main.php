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
                include("main/banhkem.php");


                // elseif( $tam =='odau')
                // include("sidebar/odau.php");
                // elseif( $tam =='angi')
                // include("sidebar/angi.php");
                // elseif( $tam =='cmt')
                // include("sidebar/cmt.php");
                // elseif( $tam =='khuyenmai')
                // include("sidebar/khuyenmai.php");
                

                else
                { include("main/index.php");}
                ?>
               
                </div>
            </div>