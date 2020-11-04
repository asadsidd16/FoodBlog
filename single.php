<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

if(isset($_GET['id'])){
    $post = selectOne('posts',['id'=> $_GET['id']]);
}

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

    <title><?php echo $post['title']; ?> | FoodWars </title>
</head>
<body>
     <!-- header -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page wrapper -->
    <div class="page-wrapper">

        <!--Content -->
        <div class="content clearfix">

            <div class="main-content single">
            <h1 class="post-title"> <?php echo $post['title']; ?> </h1>    
            
            <div class="post-content">
               <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-img" width="300" height="300">
               &nbsp;
               <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
               &nbsp;
               <?php echo html_entity_decode($post['body']); ?>
            </div>
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