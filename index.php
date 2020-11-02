<?php
include("path.php");
include(ROOT_PATH . "/app/database/db.php");

$posts = getPublishedPosts();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/599eedc4d1.js" crossorigin="anonymous"></script>


        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Hind:wght@300&display=swap" rel="stylesheet">
        <!-- Custom Styling -->

        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Blog</title>
    </head>
    <body>
        <!-- header -->
        <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


        <!--Page wrapper -->
        <div class="page-wrapper">
            <!--slider -->
            <div class="post-slider">
                <h1 class="slider-title"> Trending Post</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>

                <div class="post-wrapper">


                <?php foreach ($posts as $post): ?>

                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html"> <?php echo $post['title']; ?> </a></h4>
                            <i class="far fa-user"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        </div>
                    </div>

                <?php endforeach; ?>

                </div>
            </div>

            <!--Content -->
            <div class="content clearfix">

                <div class="main-content">
                    <h1 class="recent-post-title"> Recent Posts</h1>

                    <?php foreach ($posts as $post): ?>
                        <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2> <a href="single.html"> <?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user">  <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php" class="btn read-more">Read More</a>
                        </div>
                    </div>
                    <?php endforeach; ?>

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