<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- font awesome -->
        <link rel ="styleheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pQbqyi7RrhN7udi9RwhKkMHpvLBHG9Sr"
            crossorigin="anonymous">
        
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Scandal|Lora"
            rel="stylesheet">
        

        <!-- Custom Styling -->

        <link rel="stylesheet" href="../../assets/css/styles.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Admin - edit User</title>
    </head>

    <body>
        <header>
            <a class="logo" href="<?php echo BASE_URL . '/index.php';?>">
                <h1 class="logo-text"><span>Blog</span>Inspires</h1>
            </a>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        j
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="#" class="logout">logout</a></li>
                    </ul>
                </li>  
            </ul>
        </header>

        
        <!-- Admin page wrapper -->
        <div class="admin-wrapper">

        <!-- Left sidebar -->
            <div class="left-sidebar">
            <ul>
                <li><a href="<?php echo BASE_URL .  '/admin/posts/index.php';?>">Manage Posts</a></li>
                <li><a href="<?php echo BASE_URL .  '/admin/users/index.php';?>">Manage Users</a></li>
                <li><a href="<?php echo BASE_URL .  '/admin/topics/index.php';?>">Manage Topics</a></li>
            </ul>

            </div>
         <!-- //Left sidebar -->
        <!-- admin content -->
        
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Users</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>

                <div class="content">
                    <h2 class="page-title">edit User</h2>

                    <for action="create.php" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf" class="text-input">
                        </div>
                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">edit User</button>
                        </div>
                    </form>

                </div>
            
            </div>
            <!-- //admin content -->
        
        </div>
        <!-- //Admin page wrapper -->



        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

        <!--Slick -->

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!--Custom script-->

        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>