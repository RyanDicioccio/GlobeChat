<!-- Author: Jia Hong Shih -->
<?php
        include 'connection.php';

        $sql = "SELECT u.user_name, c.text, u.color 
        FROM gc_user u 
        JOIN chats c ON u.id = c.userid;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $userColor = $row["color"];
                echo '<p class="chat_line" style="color: ' . $userColor . ';">' . $row["user_name"] . ": " . $row["text"] . '</p>';
            }
        }

        $conn->close();
?>
