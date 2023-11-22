<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where name='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }
    function signup($username,$password,$email,$phone){
        $con = getConnection();
        $sql = " insert into user (name,password,email,phone) values ('$username', '$password', '$email','$phone')";
        $result = mysqli_query($con, $sql);
        //$user = mysqli_fetch_assoc($result);
        
        if ($result) {
          return true;
            }
    }