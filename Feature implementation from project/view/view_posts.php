<?php
    require_once('../view/user_model.php');
   $posts = getAllPosts();
?>
<html lang="en">
<head>
    <title>View All Posts</title>
</head>
<body>
    <a href="posts.php">Back</a>
    <br><br>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Title</td>
            <td>Description</td>
            <td>Category</td>
            <td>Added By</td>
            <td>Date</td>
        </tr>
        <?php for($i=0; $i<count($posts); $i++){ ?>
        <tr>
            <td><?=$posts[$i]['id']?></td>
            <td><?=$posts[$i]['image']?></td>
            <td><?=$posts[$i]['title']?></td>
            <td><?=$posts[$i]['description']?></td>
            <td><?=$posts[$i]['category']?></td>
            <td><?=$posts[$i]['added_by']?></td>
            <td><?=$posts[$i]['date']?></td>
            <td>
                <a href="edit_posts.php?id=<?=$posts[$i]['id']?>"> EDIT </a> |
                <a href="delete_posts.php?id=<?=$posts[$i]['id']?>"> DELETE </a>
            </td>
        </tr>

<?php } ?>
    </table>
</body>
</html>


