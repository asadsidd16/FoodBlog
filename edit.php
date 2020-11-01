<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/599eedc4d1.js" crossorigin="anonymous"></script>
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Hind:wght@300&display=swap" rel="stylesheet">

        

        <!-- Custom Styling -->

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="assets/css/admin.css">

        <title>Admin - Edit Post</title>
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
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Edit Post</h2>

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>" >
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
                            
                            <?php if ( empty($published) && $published == 0): ?>
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
                            <button type="submit" name = "update-post" class="btn btn-big">Update Post</button>
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