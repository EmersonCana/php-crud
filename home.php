<?php
session_start();
include('db.php');
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
    echo $_SESSION['login'];
    ?>

    <a href="logout.php">Logout</a>
    <form action="search.php" method="get">
        <input type="text" name="search" id="search" placeholder="Search">
        <button type="submit">Search</button>
    </form>
    <h1>Posts</h1>
    <form action="create_post.php" method="post">
        <input type="text" name="post" id="post">
        <button type="submit">Create</button>
    </form>
    <ul class="blog-list">
        <?php
            $sql = "SELECT * FROM posts";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>". $row['post']."<a href='post_editor.php?pid=".$row['id']."'>Edit</a><a href='delete_post.php?pid=".$row['id']."' class='delete-button'>X</a></li>";
                }
            }
        ?>
    </ul>
    
</body>
</html>