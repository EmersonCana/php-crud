<?php
include('db.php');

if(isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $post = $_POST['post'];

    $sql = "UPDATE posts SET post = '$post' WHERE id = $pid";
    
    if($conn->query($sql) === true) {
        header("Location: home.php");
    }else{
        echo "There was an error";
    }
}
?>