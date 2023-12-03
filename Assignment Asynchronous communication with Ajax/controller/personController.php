<?php
require_once('../model/personsModel.php');

$action = $_REQUEST['action'];

if($action == 'login'){
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $error_message = '';

    if($email == ''){
        $error_message .= 'Please enter your email';
    }
    if($password == ''){
        $error_message .= 'Please enter your password';
    }

    if($error_message == ''){
        $login = user_login($email, $password);

        if($login == true){

            session_start();
            $_SESSION["person_flag"] = $email;
            echo 'correct_details';
        }else if($login == false){
            echo 'Incorrect login details! Sign up. <a href="register.php" >Register Now</a>';
        }
    }else{
        echo $error_message;
    }
}

if($action == 'get_email'){

    $email = $_REQUEST['email'];
    
    $check_email = check_user_email($email);

    if($check_email == true){
        echo "this email address already belongs to a registered account. Try another..!";
    }else if($check_email == false){
        echo "this email address is valid to register...!";
    }
}

if($action == 'register'){
    $error_message = '';
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $phone = $_REQUEST['phone'];


    $check_email = check_user_email($email);

    if($check_email == true){
        $error_message .= 'This email address has been already registered. Try another..!';
    }

    if($error_message == ''){

      
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password'  => $password
        ];
        $create_user = create_user($data);

        if($create_user == true){
            echo "Registered successfully...<a href='login.php'>Login Now</a>";
        }else if($create_user == false){
            echo "Registration failed, something wrong... try again!";
        }
    }else{
        echo $error_message;
    }
}