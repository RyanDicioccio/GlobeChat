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
        $user = $result->fetch_assoc();
        // Store  in session
        $_SESSION['user_id'] = $user['id']; 
        $_SESSION['user_name'] = $user['user_name'];
        // redirect to chat page
        echo '<script>window.location.href = "Chatroom.php";</script>';
        exit;
    } else {
        // the user isn't being fetch from database
        echo '<script>alert("Invalid user name or password. Please try again.");';
        echo 'window.location.href = "Login.php";</script>';
        exit;
    }
}

// Close database connection
$conn->close();
?>




