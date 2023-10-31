<?php 

$dbhost = '127.0.0.1';
$dbname = 'webtechMid';
$dbuser = 'root';
$dbpassword = '';


function getConnection(){
    global $dbhost;
    global $dbname;
    global $dbpassword;
    global $dbuser;

    $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    if(!$conn){
        die("Connection Failed!");
    }

    return $conn;
}

?>