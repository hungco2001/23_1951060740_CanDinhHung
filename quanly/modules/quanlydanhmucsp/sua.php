<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1 ";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<p>Sủa danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;" >
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <!-- gửi giữu liệu thêm sản phẩm qua trang xử lý  -->
        <!--post tránh bị mất dữ liệu  -->
        <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
        ?>

        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
       
        <?php
        }
        ?>
    </form>

</table>

