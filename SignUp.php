<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>GlobeChat-Signup</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <form id="form" method="post" action="SignUserUp.php" onsubmit="return validateSignUp();">

    <div class="SignUpWrapper">

        <div class="textInputsSign">

            <div class="textfieldSign">
                <label for="Email">Email Address</label>
                <input type="text" name="email" id="email" placeholder="Type your email">
                <p id="pEmail"></p>

            </div>

            <div class="textfieldSign">
                <label for="login">User Name</label>
                <input type="text" name="login" id="login" placeholder="Type your username">
                <p id="pUser"></p>
            </div>

            <div class="textfieldSign">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Type your password">
                <p id="pPass"></p>
            </div>
            

            <div class="textfieldSign">
                <label for="cPass">Confrim Password</label>
                <input type="text" name="cPass" id="cPass" placeholder="Retype your password">
                <p id="pCPass"></p>
            </div>

        </div>

        <br>

        <div id="ColorPick">
            <label for="color">Select a user color:</label>
           <input type="color" id="color" name="color">
           <p id="pColor"></p>
        </div>

        <div class="DontHaveA">
            <h5>Already have a account? Login <a href="Login.php">Here!</a></h5>
        </div>

        <div class="BTN">
            <button id="LoginBtn" name="signup" type="submit">SignUp</button>
        </div>

    </div>

</form>

<script src="./script.js"></script>
</body>

</html>