<?php 
    require_once('../model/user.php');

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    

    if($username == "" || $password == "" || $email == "" || $phone == ""){
        echo "null username or password or email or gender!";
    }else{
        $status = signup($username, $password,$email,$phone);
        if ($status){
        $_SESSION['flag'] = true;
        header('location: ../view/userlogin.php');
        }
    }
?>