<!-- Author: Jia Hong Shih -->
<?php
session_start();
include 'connection.php'; 

if (isset($_POST["signup"])) {
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $color = $_POST['color'];

    // check if the email already exists
    $check_query = "SELECT * FROM gc_user WHERE email = '$email'";
    $check_result = $conn->query($check_query);
    if ($check_result->num_rows > 0) {
        echo '<script>alert("This email already exists.");</script>';
        exit;
    }

    // insert user data
    $sql = "INSERT INTO gc_user (user_name, password, email, color)
            VALUES ('$login', '$password', '$email', '$color')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the login in page
        echo '<script>alert("New account created. Please login!");';
        echo 'window.location.href = "Login.php";</script>';
        exit;
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>window.location.href = "SignUp.php";</script>';
        exit;
    }
} else {
    $_SESSION['error'] = "Error, please refresh and submit again";
    echo '<script>window.location.href = "SignUp.php";</script>';
    exit;
}

$conn->close(); 
?>

