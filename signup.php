<!-- always define session_start at the top -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>Sign Up</title>
</head>
<body>
        <div class="col-lg-3 mx-auto">
            <form action="./register.php" class="border p-4" method="POST">
                    <img width="60%" class="mx-auto d-block" src="https://cdn2.downdetector.com/static/uploads/logo/Instagram_Logo_Large.png" alt="">
                    <div class="d-flex align-items-center gap-4">
                        <hr style="height: 2px;width:100%">
                            <p class="fw-bold m-0 text-secondary">
                                OR
                            </p>
                        <hr style="height: 2px;width:100%">
                    </div>
                    <input class="form-control rounded-0 fs-6 my-2" type="text" name="number" placeholder="Mobile Number" id="">
                    
                    <input class="form-control rounded-0 fs-6 my-2" type="text" name="fullname" placeholder="Full Name" id="">
                    <input  class="form-control rounded-0   my-2" type="text" name="username" placeholder="Username" id="">
                    <input  class="form-control rounded-0   my-2" type="password" name="password" placeholder="Password" id="">
                    <button class="btn text-white fw-bold w-100 rounded-3 btn-info">
                        Sign Up
                    </button>
                    <?php
                        if(isset($_SESSION['err_fields'])){
                        echo "<p class='m-0 text-danger fw-normal'>
                            {$_SESSION['err_fields']}
                        </p>";
                        }
                        unset($_SESSION['err_fields'])
                    ?>
                </form>
                <div class="border text-center my-3 p-4">
                    <p class='m-0'>Have an Account ?  <a class="text-decoration-none text-info fw-bold" href="./index.php" >
                        Log In
                    </a></p>
                </div>
        </div>

                    

</body>
</html>