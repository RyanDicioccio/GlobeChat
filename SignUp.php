<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="Ryan Dicioccio">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>GlobeChat-Signup</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <!-- main menu button -->
    <div class="MainBtn">
        <a href="index.php"><Button class="BtnMain">Main Menu</Button></a>
    </div>

    <form id="form" method="post" action="SignUserUp.php" onsubmit="return validateSignUp();">

        <!-- div wrapper to hold all elements needed to sign a user up -->
        <div class="SignUpWrapper">

            <!-- div to hold all textfeilds and inputs -->
            <div class="textInputsSign">

                <!-- Email label and input box -->
                <div class="textfieldSign">
                    <label for="Email">Email Address</label>
                    <input type="text" name="email" id="email" placeholder="Type your email">
                    <p id="pEmail" class="error"></p>

                </div>

                <!-- Username label and input box -->
                <div class="textfieldSign">
                    <label for="login">User Name</label>
                    <input type="text" name="login" id="login" placeholder="Type your username">
                    <p id="pUser" class="error"></p>
                </div>

                <!-- password label and input box -->
                <div class="textfieldSign">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Type your password">
                    <p id="pPass" class="error"></p>
                </div>


                <!-- confrim password label and input box -->
                <div class="textfieldSign">
                    <label for="cPass">Confrim Password</label>
                    <input type="text" name="cPass" id="cPass" placeholder="Retype your password">
                    <p id="pCPass" class="error"></p>
                </div>

            </div>

            <br>

            <!-- color label and input color wheel -->
            <div id="ColorPick">
                <label for="color">Select a user color:</label>
                <input type="color" id="color" name="color">
                <p id="pColor" class="error"></p>
            </div>

            <!-- a tag to link user to the login page if they alreADY have an account.  -->
            <div class="DontHaveA">
                <h5>Already have a account? Login <a href="Login.php">Here!</a></h5>
            </div>

            <!-- button to submit the signup info and sign the user up.  -->
            <div class="BTN">
                <button id="LoginBtn" name="signup" type="submit">SignUp</button>
            </div>

        </div>

    </form>

    <!-- linking the script  -->
    <script src="./script.js"></script>
</body>

</html>