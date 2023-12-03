<?php
require_once('db.php');

function user_login($email, $password){
    $conneciton = get_connection();
    $sql = "SELECT * FROM persons WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function create_user($user_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO persons (name, email, phone, password)
    VALUES ('{$user_data['name']}', '{$user_data['email']}', '{$user_data['phone']}', '{$user_data['password']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}


function check_user_email($email){
    $conneciton = get_connection();
    $sql = "SELECT email FROM persons WHERE email = '{$email}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }
}
 
function get_current_user_info(){
    session_start();
    $session_email = '';

    if(isset($_SESSION['person_flag'])){
        $session_email = $_SESSION['person_flag'];
    }
    $conneciton = get_connection();
    $sql = "SELECT * FROM persons WHERE email = '{$session_email}'";
    $result = mysqli_query($conneciton, $sql);
    $user_data = $result->fetch_assoc();
    return $user_data;
}
?>