<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Likh.liya</title>
  </head>
  <body style="background-image: url('https://i.pinimg.com/originals/50/49/8d/50498d5c64f7f4452b6c2c82d65be520.gif'); font-family: Arial, sans-serif; padding: 20px;">

    <h1 style="font-size: 100px; color: #4a90e2; text-align: center;">Likh.diya</h1>
    
 
    <a href="?logout=true" style="position: absolute; top: 20px; right: 20px; font-size: 18px; color: red; text-decoration: none;">Logout</a>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "likh.le";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Message, Time_Stamp FROM main_data ORDER BY Time_Stamp DESC";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
      echo '<div style="margin: 20px auto; width: 90%; background-color: #fff; padding: 20px; border-radius: 8px;">';
      echo '<table style="width: 100%; text-align: left;">';
      echo '<thead>
              <tr>
                <th style="border-bottom: 2px solid #ccc; padding: 10px;">User</th>
                <th style="border-bottom: 2px solid #ccc; padding: 10px;">Message</th>
                <th style="border-bottom: 2px solid #ccc; padding: 10px;">Timestamp</th>
              </tr>
            </thead>';
  
      while ($row = $result->fetch_assoc()) {
          echo '<tr>';
          echo '<td style="border-bottom: 1px solid #ddd; padding: 8px;">Anonymous</td>';
          echo '<td style="border-bottom: 1px solid #ddd; padding: 8px; word-wrap: break-word; white-space: normal; max-width: 700px; overflow-wrap: break-word;">' . $row["Message"] . '</td>';
          echo '<td style="border-bottom: 1px solid #ddd; padding: 8px;">' . $row["Time_Stamp"] . '</td>';
          echo '</tr>';
      }
      
  } else {
      echo "<p style='color: red; text-align: center;'>No messages found.</p>";
  }
  

    $conn->close();
    ?>

  </body>
</html>
