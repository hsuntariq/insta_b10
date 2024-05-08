<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php';
    include './config.php';
    ?>

    <style>
        ::-webkit-scrollbar{
            width: 2px;
            height: 4px;
            cursor: grab;
            
        }
        
        ::-webkit-scrollbar-thumb{
            cursor: grab;
            width: 2px;
            /* background:linear-gradient(orange,purple,blue); */
            /* background:white */
            height: 5px;
        }
    </style>
    <title>
        Salam
        <?php  echo  $_SESSION['name'] ?>
    </title>
</head>

<body>


    <!-- <div style="right:0;background:linear-gradient(135deg,red,orange,purple);transition:all 0.8s" class=" p-2 flash text-dark position-fixed top-0 fw-bold text-white col-md-2 ms-auto">
                <h4><?php echo $_SESSION['welcome'] ?></h4>
            </div> -->

    <?php


    if (!isset($_SESSION['welcome']) && !isset($_SESSION['name'])) {
        header("Location: http://localhost/insta_b10/signup.php");
    } else {
        if (isset($_SESSION['welcome'])) {
    ?>

            <div style="right:0;background:linear-gradient(135deg,red,orange,purple);transition:all 0.8s" class=" p-2 flash text-dark position-fixed top-0 fw-bold text-white col-md-2 ms-auto">
                <h4><?php echo $_SESSION['welcome'] ?></h4>
            </div>
    <?php
        }
    }


    if(isset($_SESSION['story_uploaded'])){
    ?>
     <div style="right:0;background:linear-gradient(135deg,red,orange,purple);transition:all 0.8s" class=" p-2 flash text-dark position-fixed top-0 fw-bold text-white col-md-2 ms-auto">
                <h4><?php echo $_SESSION['story_uploaded'] ?></h4>
            </div>
            
    <?php }
    
    if(isset($_SESSION['post_uploaded'])){
    ?>
     <div style="right:0;background:linear-gradient(135deg,red,orange,purple);transition:all 0.8s" class=" p-2 flash text-dark position-fixed top-0 fw-bold text-white col-md-2 ms-auto">
                <h4><?php echo $_SESSION['post_uploaded'] ?></h4>
            </div>
    ?>

    <?php }?>








    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2   p-4 border" style="height:100vh;">
                <?php include './sidebar.php' ?>

            </div>
            <div class="col-lg-7 bg-light">

                <div class="col-lg-6 mx-auto" style="height:98vh; overflow-y:scroll">
                    <div class="card p-4 my-3 border">
                        <div class="d-flex gap-4" style="width:100%;overflow-x:scroll">
                            <?php include './stories.php' ?>
                        </div>
                    </div>

                    <?php include './posts.php' ?>


                </div>



            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>





    <?php  
    
        include './boot_js.php'
    ?>


    <script>

        let flash = document.querySelector('.flash');
        setTimeout(() => {
            flash.style.transform = 'translateX(100%)'
        }, 3000)


        let send_btn =document.querySelector('.send');
        let comment =document.querySelector('.comment');
        send_btn.style.transition = 'all 0.2s'
        comment.addEventListener('keyup',()=>{  
            if(comment.value.length > 0){
                send_btn.style.opacity = 1
                send_btn.style.transform = 'translateY(0)'
            }else{
                send_btn.style.opacity = 0
                send_btn.style.transform = 'translateY(30px)'

            }
        })

    </script>



    <?php
    unset($_SESSION['welcome']);
    unset($_SESSION['story_uploaded']);
    unset($_SESSION['post_uploaded']);

    ?>


    <a  href="./logout.php" class="btn btn-danger">
            Logout
        </a>

</body>

</html>