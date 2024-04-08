<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="Ryan Dicioccio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeChat-Login</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

<<<<<<< HEAD
    <!-- div to hold button to bring user back to the main menu. -->
<div class="MainBtn">
            <a href="index.php" ><Button class="BtnMain">Main Menu</Button></a>
        </div>
        
        <!-- Validator for the login -->
=======
<div class="MainBtn">
            <a href="index.php"><Button>Main Menu</Button></a>
        </div>
        
>>>>>>> 5f360fee53b18f8329524258b4c7c574860919d9
    <form id="form" action="LogUserIn.php" method="post" onsubmit="return validateLogin();">

        <!-- Div to hold all textfeilds for the login page. -->
    <div class="LoginWrapper">

           <!-- Username label and input box -->
        <div class="textfield">
            <label for="login">User-Name</label>
            <input type="text" name="login" id="login" placeholder="Type your username">
        </div>

           <!-- Password label and input box -->
        <div class="textfield">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Type your password">
            <p id="accountcheck" class="error"></p>
        </div>

        <!-- s -->
        <div class="BTN">
            <button type="submit" id="LoginBtn">Login</button></a>
        </div>

        <!-- p tag used to refer any error messages -->
         <p></p> 

         <!-- div to hold text and a tag to bring user to signup sheet if they do not have an account -->
         <div class="DontHaveA">
         <h5>Dont have a account? Sign up <a href="SignUp.php">Here!</a></h5>
        </div>

        <!-- div to hold text and a tag to bring user to delete page if they want to delete there account-->
        <div class="DontHaveA">
            <h5>Unsatisfied with your GlobeChat account? If you wish to remove your account click <a href="Delete.php">here</a></h5>
           </div>

    </div>
</form>
<!-- 
link to the script. -->
<script src="./script.js"></script>
</body>

</html>