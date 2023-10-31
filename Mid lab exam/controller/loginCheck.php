<?php 
    session_start();
    require_once('../model/userModel.php');
    $userId = $_REQUEST['userId'];
    $password = $_REQUEST['password'];


    if($userId == "" || $password == ""){
        echo "null User Id/password!";   
    }else{
        
        $status = login($userId, $password);
        if($status){
            $_SESSION['flag'] = "true";
            header('location: ../view/user_home.php');
        }else{
            echo "invaid user!";
        }
    }
?>