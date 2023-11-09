<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('db.php');

if(isset($_GET['m'])) {
    switch($_GET['m']) {
        case "login":
            if(isset($_POST)) {
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    echo "Login success!";
                    $_SESSION['login'] = true;
                    header("Location: home.php");
                }else{
                    echo "Invalid Login Credentials";
                }
            }
            break;
        case "register":
            if(isset($_POST)) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
                    if($conn->query($sql)) {
                        echo "Registered";
                    }else{
                        echo ("Error: " . $conn->error);
                    }
                
            }
            break;
        default:
            echo "Invalid action";
    }
}


?>