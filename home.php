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
            height: 5px;

        }

        ::-webkit-scrollbar-thumb{
            width: 2px;
            background:linear-gradient(orange,purple,blue);
            height: 5px;
        }
    </style>
    <title>Document</title>
</head>

<body>


    <!-- <div style="right:0;background:linear-gradient(135deg,red,orange,purple);transition:all 0.8s" class=" p-2 flash text-dark position-fixed top-0 fw-bold text-white col-md-2 ms-auto">
                <h4><?php echo $_SESSION['welcome'] ?></h4>
            </div> -->

    <?php


    session_start();
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
    ?>




    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2   p-4 border" style="height:100vh;">
                <?php include './sidebar.php' ?>

            </div>
            <div class="col-lg-7 bg-light">

                <div class="col-lg-6 mx-auto" style="height:98vh; overflow-y:scroll">
                    <div class="card p-4 my-3 border">
                        <div class="d-flex gap-4">
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
    </script>



    <?php
    unset($_SESSION['welcome'])

    ?>


    <!-- <a  href="./logout.php" class="btn btn-danger">
            Logout
        </a> -->

</body>

</html>