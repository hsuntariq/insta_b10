<?php
    include './config.php';
    $caption = $_POST['caption'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name,'./images/' . $filename);
    $insert = "INSERT INTO story (caption,image) VALUES ('{$caption}', '{$filename}')";
    mysqli_query($connection,$insert);
?>