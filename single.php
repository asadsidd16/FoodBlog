<?php include("path.php"); ?>
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

    <title>Single Post</title>
</head>
<body>
     <!-- header -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page wrapper -->
    <div class="page-wrapper">

        <!--Content -->
        <div class="content clearfix">

            <div class="main-content single">
            <h1 class="post-title"> This is the title of the post</h1>    
            
            <div class="post-content">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum explicabo obcaecati exercitationem.
                    Enim facilis unde illo, error repellendus esse sed ratione at excepturi quis reiciendis perspiciatis quo iusto dignissimos est!</p>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nostrum explicabo obcaecati exercitationem.
                        Enim facilis unde illo, error repellendus esse sed ratione at excepturi quis reiciendis perspiciatis quo iusto dignissimos est!</p>
    
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