<p>th<p>thêm danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;" >
    <form action="modules/quanlydanhmucsp/xuly.php" method="POST">
        <!-- gửi giữu liệu thêm sản phẩm qua trang xử lý  -->
        <!--post tránh bị mất dữ liệu  -->

        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmuc" value="thêm danh mục sản phẩm"></td>
        </tr>
        <!-- colspan="2" nối 2 cột  -->
    </form>

</table>


