<?php
require_once('../model/userModel.php');
require_once('../controller/functions.php');

$action = $_REQUEST['action'];

if($action == 'register_user'){

    $error_message = '';

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];
    $contact = $_REQUEST['contact'];


    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";
    }elseif (username_validation($username) === false) {
        $error_message .= "Invalid User Name Format! <br>";
    }elseif (user_name_exists($username) == true) {
     $error_message .= "This User Name Already Exists. Try Another! <br>";
    }

    if($password == ''){
        $error_message .= "Your must fill Password! <br>";
    }elseif (password_validation($password) === false) {
        $error_message .= "Wrong Password Format! <br>";
    }

    if($name == ''){
        $error_message .= "Your must fill Full Name! <br>";
    }

    if($contact == ''){
        $error_message .= "Your must fill Contact No! <br>";
    }

 

    //data array
    $submited_data = [
     'username' => $username,
     'password' => $password,
     'name' => $name,
     'contact' => $contact
     ];
 
    if($error_message === ''){
 
     $result = create_user($submited_data);
     if($result){
         echo "Registration Success! <a href='login.php'>Login Now</a> <br>";
     }else{
        echo $error_message;
     }
     
    }



}