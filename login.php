<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="d-grid gap-2 d-md-block">
            <div class="row"><button type="button" class="btn btn-primary "><img src="img/foody-corp.png" alt=""></button>
            

            </div>
    </header>
    <main>
        <div class="login">
            <h1 class="text-center">Login</h1>
            <hr>
            <?php
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

            if (isset($_SESSION['no-login-message'])) {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>
           
     
            <div class="d-grid gap-2 d-md-block">
                <div class="row"><button type="button" class="btn btn-success"><i class="bi bi-phone"></i> Đăng nhập bằng số đ thoại </button>
                </div>
            <hr>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <div class="row"><button type="button" class="btn btn-primary"><i class="bi bi-facebook"></i> Đăng nhập bằng facebook</button>
                </div>

            </div>

            <form action="" method="POST" class="text-center">
                Username: <br>
                <input type="text" name="username" placeholder="Enter Username"><br><br>

                Password: <br>
                <input type="password" name="password" placeholder="Enter Password"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-primary">
                <br><br>
            </form>

            <p class="text-center">Created By - <a href="www.vijaythapa.com">CSE485</a></p>
        </div>
    </main>
</body>