<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Single Post</title>
    <style>
        body{
            background: rgba(0,0,0,0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <?php 
        $id = $_GET['id'];
        include './config.php';
        $select = "SELECT posts.id AS post_id, posts.image,posts.caption,users.id AS user_id,users.username,users.fullname FROM posts JOIN users ON posts.user_id = users.id WHERE posts.id = $id";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
            <div style="height: 90vh;" class="container card rounded shadow p-0 m-0 border-0">
                <div class="row" style="height:100%">
                    <div class="col-lg-7 p-0">
                        <img width="100%" height="100%" style="object-fit: cover;" src="./posts/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="col-lg-5 py-4 p-0 m-0">
                        <div class="d-flex">
                            <div class="d-flex px-4 align-items-center gap-3">
                                <img width="60px" height="60px" class="rounded-circle" src="http://localhost/insta_b10/posts/2.jpg" alt="">
                                <h6 class="text-capitalize">
                                    <?php echo $row['username'] ?>
                                </h6>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="d-flex px-4 align-items-center gap-3">
                                <img width="40px" height="40px" class="rounded-circle" src="http://localhost/insta_b10/posts/2.jpg" alt="">
                                <div class="d-flex gap-3 align-items-center">
                                    <h6 class="text-secondary p-0 m-0">
                                    <?php echo $row['username'] ?>
                                    </h6>
                                    <p class="text-secondary p-0 m-0 ">
                                    <?php echo $row['caption'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php 
                   
                    
                    $select = "SELECT posts.id AS post_id, posts.image,posts.caption,users.id AS user_id,users.username,users.fullname,comments.id AS comment_id,comments.comment FROM comments JOIN users ON comments.user_id = users.id JOIN posts ON comments.post_id = posts.id WHERE posts.id = $id";
                    $result = mysqli_query($connection,$select);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <p>
                        <?php echo $row['comment'] ?>
                    </p>
                    </div>
                </div>
            </div>

        <?php
            }}
        }}
        ?>
</body>
</html>