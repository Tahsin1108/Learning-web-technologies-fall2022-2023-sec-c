<?php
    require_once('db.php');

    function login($userId, $password){
        $con = getConnection();
        $sql = "select * from users where userId='{$userId}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function createUser(){

    }

    function getUser($id){

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function updateUser($user){

    }

    function deleteUser($id){

    }


?>