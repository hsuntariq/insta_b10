<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php';
    include './config.php';
    ?>
    <title>Document</title>
</head>
<body>
    

    <?php
        session_start();
        
        if(!isset($_SESSION['welcome'])){
        header("Location: $base_url/signup.php");
    } else {
        ?>

            <div style="right:0" class="bg-warning text-dark position-fixed top-0 fw-bold col-md-2 ms-auto">
                <h4><?php echo $_SESSION['welcome'] ?></h4>
            </div>

            <?php } ?>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2git  p-4 border" style="height:100vh;">
                        <div class="d-flex flex-column" style="height:100%">
                             <img width="40%" class="mx-auto d-block" src="https://cdn2.downdetector.com/static/uploads/logo/Instagram_Logo_Large.png" alt="">
                             <ul style="height:100%" class="flex flex-column   list-unstyled fs-4 text-capitalize fw-medium">
                                <li class='my-5'><i class="bi bi-house-door-fill"></i>  Home</li>
                                <li class='my-5'><i class="bi bi-search"></i> Explore</li>
                                <li class='my-5'><i class="bi bi-messenger"></i> Messages</li>
                                <li class='my-5'><i class="bi bi-heart"></i> Notifications</li>
                                <li class='my-5'><i class="bi bi-plus-square"></i> create</li>
                                <li class='justify-self-end'><i class="bi bi-person"></i> Profile</li>

                             </ul>
                        </div>
                        
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-3"></div>
                </div>
            </div>




            
        <!-- <a  href="./logout.php" class="btn btn-danger">
            Logout
        </a> -->

</body>
</html>