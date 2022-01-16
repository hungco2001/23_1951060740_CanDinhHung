<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
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
            
            <h1 class="h3 mb-3 font-weight-normal">Sing Up</h1>
            <label for="txturse" class="sr-only">Ursename</label>
            <input type="text" id="txturse" name="txturse" class="form-control" placeholder="Ursename" required autofocus>
            <label for="inputEmail" class="sr-only">Email Address</label>
            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="txtPass1" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Retype Password</label>
            <input type="password" id="inputPassword" name="txtPass2" class="form-control" placeholder="Retype Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignIn" >Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>