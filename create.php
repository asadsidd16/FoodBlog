<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="https://kit.fontawesome.com/599eedc4d1.js" crossorigin="anonymous"></script>


        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Hind:wght@300&display=swap" rel="stylesheet">
        

        <!-- Custom Styling -->

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="assets/css/admin.css">

        <title>Add Post</title>
    </head>

    <body>
     
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

        
        <!-- Admin page wrapper -->
        <div class="admin-wrapper">

        <!-- Left sidebar -->

         <!-- //Left sidebar -->
        <!-- admin content -->
        
            <div class="admin-content">
                <div class="button-group">
                    <a href="Postindex.php" class="btn btn-big">View Post</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Create Post</h2>
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label>Body</label>
                            <textarea name="body" id="body" cols="60" rows="10"><?php echo $body ?></textarea>
                        </div>
                        <div>
                            
                            <?php if ( empty($published) ) : ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Publish
                                </label>
                                
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publish
                                </label>
                            <?php endif; ?>
                            
                        </div>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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

