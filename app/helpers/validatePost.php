<?php 

function validatePost($post){
    $errors = array();

    if(empty($post['title'])){
        array_push($errors, 'Title is required');
    }

    if(empty($post['body'])){
        array_push($errors, 'body is required');
    }


    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if(isset($existingPost)){
        if(isset($post['update-post']) && $existingPost['id'] != $post['id']){
            array_push($errors, 'Post with title already exists');
        }

        if(isset($post['add-post'])){
            array_push($errors, 'Post with that title already exists ');
        }
    }
    return $errors;
}


