<?php
include('db.php');
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $image=$_POST['image']; 
    $title=$_POST['title']; 
    $description=$_POST['description']; 
    $category=$_POST['category']; 
    $added_by=$_POST['added_by']; 
    $date=$_POST['date']; 
    
    $sql= "update `posts` set id=$id, image='$image', title='$title', description='$description', category='$category', added_by='$added_by', date= '$date' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo "Data updated succesfully";
      header('location:view_posts.php');
    }
      else{die(mysqli_error($con));}
    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Posts</title>
  </head>
  <body>
    <div class="container">
    <form method="post">
  <div class="form-group">
    <label>Image</label> 
    <input type="file" class="form-control"
    placeholder="Enter image" name="image">
  </div>
  <div class="form-group">
    <label>Title</label> 
    <input type="text" class="form-control"
    placeholder="Enter title" name="title">
  </div>
  <div class="form-group">
    <label>Description</label> 
    <input type="text" class="form-control"
    placeholder="Enter description" name="description">
  </div>
  <div class="form-group">
    <label>Category</label> 
    <input type="text" class="form-control"
    placeholder="Category" name="category">
  </div>
  <div class="form-group">
    <label>Added By</label> 
    <input type="text" class="form-control"
    placeholder="Added By" name="added_by">
  </div>
  <div class="form-group">
    <label>Date</label> 
    <input type="date" class="form-control"
    placeholder="Enter Date" name="date">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Edit</button>
  <a href="view_posts.php">View Posts</a>
</form>
    </div>
</html>