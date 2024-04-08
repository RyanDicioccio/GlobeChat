<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="Ryan Dicioccio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeChat-Chatroom</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

   
 <!-- full div for the wallaper -->
    <div class="wallpaper">

        <!-- div to hold buttons to allow user to change background. -->
        <div class="wallpaperMenu">
            <h4>Change Wallpaper: </h4>
            <button onclick="changeWallpaper('./Photos/DefaultBg.png')">Default</button>
            <button onclick="changeWallpaper('./Photos/BeachBg.jpg')">Beach</button>
            <button onclick="changeWallpaper('./Photos/Citybg.jpg')">City</button>
            <button onclick="changeWallpaper('./Photos/MountainBg.jpg')">Mountain</button>
            <button onclick="changeWallpaper('./Photos/RainForestbg.jpg')">RainForest</button>
            <button onclick="changeWallpaper('./Photos/spaceBg.jpg')">Space</button>
            <button onclick="changeWallpaper('./Photos/Underwaterbg.jpg')">Underwater</button>
    
        </div>


        <!-- chatbox div to hold all chats given from user -->
        <div class="ChatBox">
        <?php include 'fetchChat.php'; ?> 
        </div>

        <!-- form to allow user to type and submit there message to the global chat. -->
        <form method="POST" action="fetchMessage.php" id="TextChat">
            <input type="text" name="mesg" id="text" placeholder="Type your message here">
            <button name="send" onclick="newMessage()" >submit</button>
        </form>

        <!-- Button to bring user back to the main menu. -->
        <div class="MainBtn">
            <a href="index.php"><Button class="BtnMain">Main Menu</Button></a>
        </div>


    </div>
<!-- 
Calling script -->
    <script src="script.js"></script>
</body>

</html>