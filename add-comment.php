<?php
session_start();
    include './config.php';
    $comment = $_POST['comment'];
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['id'];
    $current_url = $_SERVER['HTTP_REFERER'];
    $insert = "INSERT INTO comments (comment,post_id,user_id) VALUES ('{$comment}',$post_id,$user_id)";
    mysqli_query($connection,$insert);
    header("Location: $current_url");

?>