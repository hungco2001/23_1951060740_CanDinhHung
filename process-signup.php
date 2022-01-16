<?php
    //Tôi coi các vấn đề đó ko tồn tại ở đây
    if(isset($_POST['btnSignUp'])){
        header("location: singup.php");
    }
    //Tôi coi mọi dữ liệu là hợp lệ
        $user = $_POST['txtuser'];
        $email = $_POST['txtEmail'];
        $pass1  = $_POST['txtPass1'];
        $pass2  = $_POST['txtPass2'];
        

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','web_foody_mysqli');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM tbl_nguoidung WHERE email = '$email' OR tendangnhap='$user";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $error ="Username or Email is existed";
            header("location: singup.php?error=$error"); //Chuyển hướng,hiển thị thông báo lỗi
        }else{
           $pass_md5= md5($pass1);
           $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
           $sql02="INSERT INTO tbl_nguoidung(tendangnhap,email,matkhau) Values ('$user','$email','$pass_hash')";
           $result02= mysqli_query($conn,$sql02);

           if ($result02==true){
               header("location:login.php");
           }else{
               $error = "Can not insert record.Please check....";
               header("location:singup.php?error=$error");
           }
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    
?>