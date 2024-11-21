<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Likh.le</title>
  </head>
  <body style="background-color: #99d1d1; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 400px;">
    
  <a href="login.php" style="position: absolute; top: 20px; right: 20px; font-size: 18px; color: #4a90e2; text-decoration: none;">View All Posts</a>

    <form method="POST" style="text-align: center; width: 100%; padding: 20px;">
      <h1 style="font-size: 100px; color: #4a90e2; margin-bottom: 20px;">Likh.le</h1>
      <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
      <textarea name="message" placeholder="Likh...." style="padding: 12px 20px; font-size: 16px; width: 70%; border: 2px solid #ccc; border-radius: 30px;"></textarea>
        <button type="submit" style="padding: 12px 20px; margin-left: 15px; background-color: #4a90e2; color: white; font-size: 16px; border: none; border-radius: 30px;">
          Post
        </button>
      </div>
      <p style="font-size: 16px; color: #333; line-height: 1.5; max-width: 500px; margin: 0 auto;">Write your thoughts and share them with the world <span style="font-weight: bold; color: #333;">anonymously</span>. <br> A simple, easy way to post your thoughts!</p>
    </form>

  </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "likh.le";

    function GetMAC(){
      ob_start();
      system('getmac');
      $Content = ob_get_contents();
      ob_clean();
      return substr($Content, strpos($Content,'\\')-20, 17);
    }

    $message = $_POST['message'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $mac_address = GetMAC();

    if (empty($message)) {
        echo "<script>alert('Message cannot be empty.');</script>";
    } else {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "INSERT INTO main_data (IP_Address, MAC_Address, Time_Stamp, Message) 
                VALUES ('$ip_address', '$mac_address', CURRENT_TIMESTAMP, '$message')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Message posted successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }

        $conn->close();
    }
}
?>
