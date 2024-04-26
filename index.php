<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>Document</title>
    <style>
        .images img{
            width: 51.5%;
            top:4%;
            right:14%;
            transition: all 0.9s;
        }


        input{
            background-color: #FAFAFA;
        }

        ::placeholder{
            font-size:0.9rem;
            color:lightslategray;
        }

        input[type='password']{
            outline-width: 0 !important;
            box-shadow: 0 0 0 0 !important;
        }

        .show{
            display: none;
        }


    </style>
</head>
<body>
    

    <div class="container col-lg-8 mx-auto mt-5">
        <div class="row col-lg-9 mx-auto">
            <div class="col-lg-6 position-relative">
                <img width="100%" src="https://static.cdninstagram.com/images/instagram/xig/homepage/phones/home-phones.png?__makehaste_cache_breaker=HOgRclNOosk" alt="">
                <div class="images">
                    <img  class="position-absolute imgs" src="./assets/screenshot1.png" alt="">
                    <img  class="position-absolute imgs" src="./assets/screenshot2.png" alt="">
                    <img  class="position-absolute imgs" src="./assets/screenshot3.png" alt="">
                    <img   class="position-absolute imgs" src="./assets/screenshot4.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <form action="./login.php" class="border p-4" method="POST">
                    <img width="60%" class="mx-auto d-block" src="https://cdn2.downdetector.com/static/uploads/logo/Instagram_Logo_Large.png" alt="">
                    <input class="form-control rounded-0 fs-6 my-2" type="text" name="username" placeholder="Phone, username, or email" id="">
                    <div class="d-flex align-items-center border my-2 p-2">
                        <input   class="form-control rounded-0 border-0 p-0 px-2 pass  " type="password" name="password" placeholder="Password" id="">
                        <span>
                            <i class="bi bi-eye-fill show"></i>
                        </span>
                    </div>
                    <button class="btn text-white fw-bold w-100 rounded-3 btn-info">
                        Log in
                    </button>

                    <?php 
                        if(isset($_SESSION['invalid'])){
                        echo "<p class='fw-bold text-danger text-center'>
                                {$_SESSION['invalid']}
                            </p>";
                        }
                    unset($_SESSION['invalid']);
                    ?>

                    <div class="d-flex align-items-center gap-4">
                        <hr style="height: 2px;width:100%">
                            <p class="fw-bold m-0 text-secondary">
                                OR
                            </p>
                        <hr style="height: 2px;width:100%">
                    </div>
                </form>
                <div class="border text-center my-3 p-4">
                    <p class='m-0'>Dont't have an account ? <a class="text-decoration-none text-info fw-bold" href="./signup.php" >
                        Sign Up
                    </a></p>
                </div>
            </div>
        </div>
    </div>




        <script>
            let show =document.querySelector('.show')
            let pass =document.querySelector('.pass')
            let imgs =document.querySelectorAll('.imgs')
            let num = 0
            setInterval(()=>{
                imgs.forEach(img=>img.style.opacity = '0')
                imgs[num].style.opacity = '1';
                num++
                if(num > imgs.length - 1 ){
                    num = 0
                }
            },1500)

                pass.addEventListener('keyup',()=>{
                    if(pass.value.length > 0){
                        show.style.display = 'block'
                    }else{
                        show.style.display = 'none'

                    }
                })

            show.addEventListener('click',()=>{
               if(pass.type == 'password'){
                pass.type = 'text'
                show.classList.remove('bi-eye-fill');
                show.classList.add('bi-eye-slash-fill')
               }else{
                pass.type = 'password'
                show.classList.remove('bi-eye-slash-fill');
                show.classList.add('bi-eye-fill')
               }
            })

        </script>


</body>
</html>