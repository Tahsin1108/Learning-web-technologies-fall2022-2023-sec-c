<?php
    include('db.php');
    if (isset($_GET['id']))
    {
        $id=$_GET['id'];

        $sql = "delete from posts where id=$id";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            //echo "Deleted";
            header('location:view_posts.php');
        }
        else{die(mysqli_error($con));}
    }

?>