<?php
include("path.php");
include(ROOT_PATH . "/app/database/db.php");

?>
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

    <title>Blog</title>
</head>
<body>
    <!-- header -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page wrapper -->
    <div class="page-wrapper">
        <!--slider -->
        <div class="post-slider">
            <h1 class="slider-title"> Trending Post</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

                <div class="post">
                    <img src="assets/images/image11.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> One day life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Asad Siddiqui</i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image11.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> One day life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Asad Siddiqui</i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image11.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> One day life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Asad Siddiqui</i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image11.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> One day life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Asad Siddiqui</i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image11.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"> One day life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Asad Siddiqui</i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                    </div>
                </div>


            </div>
        </div>

        <!--Content -->
        <div class="content clearfix">

            <div class="main-content">
                <h1 class="recent-post-title"> Recent Posts</h1>

                <div class="post">

                    <img src="assets/images/image11.jpg" alt="" class="post-image">
                    <div class="post-preview">

                        <h2> <a href="single.html"> The strongest and sweetest</a></h2>
                        <i class="far fa-user"> Asad Siddiqui </i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Exercitationem eligendi suscipit dicta fugiat maxime ipsa enim expedita excepturi asperiores atque totam perspiciatis deleniti, perferendis unde laudantium placeat laborum velit sequi.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post">

                    <img src="assets/images/image11.jpg" alt="" class="post-image">
                    <div class="post-preview">

                        <h2> <a href="single.html"> The strongest and sweetest</a></h2>
                        <i class="far fa-user"> Asad Siddiqui </i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Exercitationem eligendi suscipit dicta fugiat maxime ipsa enim expedita excepturi asperiores atque totam perspiciatis deleniti, perferendis unde laudantium placeat laborum velit sequi.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">

                    <img src="assets/images/image11.jpg" alt="" class="post-image">
                    <div class="post-preview">

                        <h2> <a href="single.html"> The strongest and sweetest</a></h2>
                        <i class="far fa-user"> Asad Siddiqui </i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Exercitationem eligendi suscipit dicta fugiat maxime ipsa enim expedita excepturi asperiores atque totam perspiciatis deleniti, perferendis unde laudantium placeat laborum velit sequi.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">

                    <img src="assets/images/image11.jpg" alt="" class="post-image">
                    <div class="post-preview">

                        <h2> <a href="single.html"> The strongest and sweetest</a></h2>
                        <i class="far fa-user"> Asad Siddiqui </i>
                        &nbsp;
                        <i class="far fa-calendar"> Oct 25, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Exercitationem eligendi suscipit dicta fugiat maxime ipsa enim expedita excepturi asperiores atque totam perspiciatis deleniti, perferendis unde laudantium placeat laborum velit sequi.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>


            </div>

            <div class="sidebar"></div>
        </div>



    </div>
    
    <!--Page wrapper cont -->
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!--Slick -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom script-->

    <script src="assets/js/scripts.js"></script>
</body>
</html>