<?php
session_start();
include './config.php';

$current_url = $_SERVER['HTTP_REFERER'];

$fullname = $_POST['username'];
$password = $_POST['password'];

$check = "SELECT * FROM users WHERE fullname = '{$fullname}' AND password = '{$password}'";

$result = mysqli_query($connection, $check);


// whenever you want/need to select/show the data, following lines are must
// if(mysqli_num_rows($result) > 0){
//     while($row = mysqli_fetch_assoc($result)){

//     }
// }



if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $_SESSION['welcome'] = 'Welcome ' . $row['fullname'];
        $_SESSION['name'] = $row['fullname'];
    }
    header("Location: $base_url/home.php");
}else{
    $_SESSION['invalid'] = 'Invalid Credentials';
    header("Location: $current_url");
}





?>