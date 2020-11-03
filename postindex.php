<?php include("path.php"); 
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
        
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Hind:wght@300&display=swap" rel="stylesheet">
        

        <!-- Custom Styling -->

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="assets/css/admin.css">

        <title> Manage Posts</title>
    </head>

    <body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

        
        <!-- Admin page wrapper -->
        <div class="admin-wrapper">


            <!-- admin content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Manage Post</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Username</th>
                            <th colspan="">Action</th>
                        </thead>

                        <tbody>
                            <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td><?php echo $post['username'] ?></td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

                                <?php if ( $post['published']): ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="unpublish">Unpublish</a></td>
                                <?php else: ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="publish">Publish</a></td>
                                <?php endif; ?>
                                
                                
                                </tr>
                            <?php endforeach;?>
                            

                        </tbody>
                    </table>

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

        <script src="/assets/js/scripts.js"></script>
    </body>
</html>