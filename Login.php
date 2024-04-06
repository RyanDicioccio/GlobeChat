<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeChat-Login</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

    <form id="form" action="LogUserIn.php" method="post" onsubmit="return validateLogin();">
    <div class="LoginWrapper">

        <div class="textfield">
            <label for="login">User-Name</label>
            <input type="text" name="login" id="login" placeholder="Type your username">
        </div>

        <div class="textfield">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Type your password">
            <p id="accountcheck"></p>
        </div>

        <div class="BTN">
            <button type="submit" id="LoginBtn">Login</button></a>
        </div>

        <!--Refer To This P Tag To Pop Up With A Error If Usernanme Or Passowrd Is Incorrect. -->
         <p></p> 

         <div class="DontHaveA">
         <h5>Dont have a account? Sign up <a href="SignUp.php">Here!</a></h5>
        </div>

        
        <div class="DontHaveA">
            <h5>Unsatisfied with your GlobeChat account? If you wish to remove your account click <a href="Delete.html">here</a></h5>
           </div>


    </div>
</form>

<script src="./script.js"></script>
</body>

</html>