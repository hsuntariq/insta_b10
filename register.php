<?php
session_start();
include './config.php';

$current_url = $_SERVER['HTTP_REFERER'];

$number = $_POST['number'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

$insert = "INSERT INTO users (number,fullname,username,password) VALUES ('{$number}','{$fullname}','{$username}','{$password}')";

$result = mysqli_query($connection, $insert);

// check if fields are entered


if($number == '' || $fullname == '' || $username == '' || $password == ''){
    $_SESSION['err_fields'] = 'Please enter the relevant fields';
    header("Location: $current_url");
}
else{
    // if query executes/runs
    if($result){
        $_SESSION['name'] = $username;
        $_SESSION['welcome'] = 'Welcome ' . $fullname;
        $_SESSION['id'] = mysqli_insert_id($connection);
        header("Location: $base_url/home.php");
    }
}






?>