<!-- Author: Jia Hong Shih -->
<?php
session_start();
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['pass'];
    // check if the user exists in the database
    $sql = "SELECT * FROM user WHERE user_name = '$login' AND password = '$password'";
    $result = $conn->query($sql);
    // if the query returned any rows
    if ($result->num_rows > 0) {
        // fetch if exists
        $sql_chat = "DELETE FROM chats WHERE userid = (SELECT id FROM user WHERE user_name = '$login' AND password = '$password')";
        $conn->query($sql_chat);
        $sql_user = "DELETE FROM user WHERE user_name = '$login'";
        $conn->query($sql_user);
        echo '<script>alert("The user has been deleted.");';
        echo 'window.location.href = "index.php";</script>';
        exit;
    } else {
        // the user isn't being fetch from database
        echo '<script>alert("Invalid user name or password. Please try again.");';
        echo 'window.location.href = "Delete.php";</script>';
        exit;
    }
}

// Close database connection
$conn->close();
?>




