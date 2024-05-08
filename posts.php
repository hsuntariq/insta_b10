
<?php
    include './config.php';
    $select = "SELECT posts.id AS post_id, posts.image,posts.caption,users.username,users.fullname,users.id AS user_id FROM posts JOIN users ON posts.user_id = users.id ORDER BY(post_id) DESC";
    $result = mysqli_query($connection,$select);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
?>



<div class="card border my-2">
    <div class="d-flex p-3 justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
            

                <img width="60px" height="60px" class="rounded-circle" src="https://www.transparentpng.com/thumb/user/gray-user-profile-icon-png-fP8Q1P.png" alt="">
            <div class="d-flex flex-column m-0 p-0">
                <h6 class="fw-bold">
                    <?php echo $row['username']?>
                </h6>
                <p class="text-secondary m-0 p-0 ">
                    <?php echo $row['fullname']?>

                </p>
            </div>
        </div>
        <div class="bi bi-three-dots"></div>
    </div>
    <a href="./single_post.php?id=<?php echo $row['post_id'] ?>">

    <img width="100%" height="600px" style="object-fit: cover;" src="./posts/<?php echo $row['image']?>" alt="">
        </a>
    <div class="d-flex p-3 justify-content-between align-items-center">
        <div class="d-flex gap-3 fs-4">
            <div class="bi bi-heart"></div>
            <div class="bi bi-chat"></div>
            <div class="bi bi-share"></div>
        </div>
        <div class="bi bi-save fs-4"></div>
    </div>

    <p class="text-secondary px-3">
       <span class="fw-bold text-dark">
        <?php echo $row['username'] ?>
       </span>  <?php echo $row['caption'] ?>
    </p>


    <form action="./add-comment.php" class="d-flex" method="POST">
        <input type="hidden" name="post_id" value="<?php echo $row['post_id'] ?>" id="">
        <input type="text" name="comment" style="box-shadow: 0 0 0 0;border:none;border-bottom:1px solid lightgray;" placeholder="Add a comment" class="form-control comment ">
        <button style="opacity:0" class="btn send">
            <i class="bi bi-send"></i>
        </button>
    </form>


</div>

<?php }}?>

