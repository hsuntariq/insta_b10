<?php
session_start();
    include './config.php';
    $current_url = $_SERVER['HTTP_REFERER'];
    $caption = $_POST['caption'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $id = $_SESSION['id'];
    move_uploaded_file($tmp_name,'./posts/' . $filename);
    $insert = "INSERT INTO posts (image,caption,user_id) VALUES ('{$filename}','{$caption}',$id)";
    $result = mysqli_query($connection,$insert);
    if($result){
        $_SESSION['post_uploaded'] = 'Post uploaded successfully';
        header("Location: $current_url");
    }
?>