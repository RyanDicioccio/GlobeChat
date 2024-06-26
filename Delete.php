<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Your account</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

<div class="MainBtn">
            <a href="index.php"><Button>Main Menu</Button></a>
        </div>

    <form id="deleteaccount" method="post" action="DeleteUser.php" >
    <div class="DeleteWrapper">

        <div class="textfield">
            <label for="login">User-Name</label>
            <input type="text" name="login" id="login" placeholder="Type your username">
            <p id="pUser" class="error"></p>
        </div>

        <div class="textfield" class="passwords">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Type your password">
            <p id="pPass" class="error"></p>
        </div>

        <div class="textfield" class="passwords">
            <label for="cPass">Confirm Password</label>
            <input type="password" name="cPass" id="cPass" placeholder="Retype your password">
            <p id="pUser" class="error"></p>
        </div>

        <p id="WarningMSG">WARNING: Deleting your GlobeChat account will delete all your past messages and 
            you will NOT be able to retrive them after your account has been deleted.</p>

            <div class="BTN">
                <button type="submit" id="LoginBtn">Delete account</button></a>
            </div>

    </div>
</form>
</body>
</html>