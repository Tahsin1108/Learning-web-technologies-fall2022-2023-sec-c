<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if($username == "" || $password == "" || $email == "" ){
        echo "null username/password/email!";
    }else{
        $con = mysqli_connect('127.0.0.1', 'root', '', 'registration');
        $sql = "INSERT INTO users (username, password, email) VALUES ('{$username}', '{$password}', '{$email}')";
        $result = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($result);

        /*if($count == 1){
            $_SESSION['flag'] = "true";
            header('location: ../view/home.php');
        }else{
            echo "invaid user!";
        }*/
    }
?>