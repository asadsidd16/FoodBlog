<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/599eedc4d1.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <!-- Custom Styling -->

    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>Food</span>Wars <i class="fas fa-drumstick-bite"></i></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="index.php" > Home </a></li>
            <li><a href="#" > About </a></li>
            <li><a href="#" > Services </a></li>
            <li><a href="registration.php" > Sign Up </a></li>
            <li><a href="login.php" > Login </a></li>
            <li>
                <a href="#" >
                    <i class="fa fa-user"></i>
                    Asad Siddiqui 
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="#" > Dashboard </a></li>
                    <li><a href="#" class="logout"> Logout </a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="auth-content">

        <form action="login.html" method="post">
            <h2 class="form-title">Login</h2>

            <div>
                <label> Username </label>
                <input type="text" name="username" class="text-input">
            </div>
            <div>
                <label> Password </label>
                <input type="password" name="password" class="text-input">
            </div>
           
            <div>

                <button type="submit" name ="login-btn"class="btn btn-big">Login</button>
            </div>
            <p> Or <a href="registration.php"> Sign Up </a></p>

        </form>
    </div>

    
    
    <!--Page wrapper cont -->
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!--Custom script-->

    <script src="assets/js/scripts.js"></script>
</body>
</html>