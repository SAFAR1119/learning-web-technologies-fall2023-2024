<?php
// Database connection parameters
require_once('../model/feedback.php');

session_start();
$username = $_REQUEST['username'];
$comments = $_REQUEST['comments'];



if($username == "" || $password == "" ){
    echo "null username or password !";
}else{
    if($status){
    $_SESSION['flag'] = true;
    echo "Thank you for your time";
    }
}

// Close the database connection
$conn->close();
?>
