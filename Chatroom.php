<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeChat-Chatroom</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

   

    <div class="wallpaper">

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


        <div class="ChatBox">
        <?php include 'fetchChat.php'; ?> 
        </div>

        <form method="POST" action="fetchMessage.php" id="TextChat">
            <input type="text" name="mesg" id="text" placeholder="Type your message here">
            <button name="send" onclick="newMessage()" >submit</button>
        </form>

        <div class="MainBtn">
            <a href="index.php"><Button>Main Menu</Button></a>
        </div>


    </div>


    <script src="script.js"></script>
</body>

</html>