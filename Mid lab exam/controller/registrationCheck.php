<?php 
    session_start();
    $userId = $_REQUEST['userId'];
    $password = $_REQUEST['password'];
    $confirmPassword = $['password'];
    $name = $_REQUEST['name'];
    $userType = $_REQUEST['userType'];

    if($userId == "" || $password == "" || $confirmPassword == "" || $name == ""|| $userType == ""){
        echo "null Id/password/confirm password/name/user type!";
    }else{
        $user = [
                    'userId'=> $userId, 
                    'password'=>$password, 
                    'password'=>$confirmPassword,
                    'name'=> $name,
                    'userType'=> $userType

                ];
        
        $_SESSION['user'] = $user;
        header('location: ../view/login.php');
    }
?>