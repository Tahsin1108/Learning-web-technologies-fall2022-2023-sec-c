<?php
    require_once('db.php');
    function getAllPosts(){
        $con = new mysqli('localhost','root','','webtech');
        $sql = "select * from posts";
        $result = mysqli_query($con, $sql);
        $posts = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($posts, $row);
        }
    
        return $posts;
        }
?>
