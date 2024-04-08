<?php
session_start();
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['mesg']) && !empty($_POST['mesg'])) {
        $mesg = $_POST['mesg'];
        $uid = $_SESSION['user_id'];
        $sql = "INSERT INTO chats (text, userid) VALUES ('$mesg', '$uid')";
        $conn->query($sql);
        header("Location: Chatroom.php");
        exit;
    }
    exit;
}
$conn->close(); 
?>
