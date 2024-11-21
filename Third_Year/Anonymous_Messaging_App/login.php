<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Log.In</title>
  </head>
  <body style="background-color: #f5f5f5; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 600px;">
    <p style="position: absolute; top: 0px; right: 20px; font-size: 18px; color: #4a90e2;"> Still No Account 🤣 </p>
    <a href="sign_up.php" target="_blank" style="position: absolute; top: 50px; right: 70px; font-size: 18px; color: #4a90e2;">Sign Up</a>

    <form method="POST" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px; text-align: center;">
      <h1 style="font-size: 60px; color: #4a90e2;">Log.In</h1>

      <input type="email" name="email" placeholder="Email" required style="width: 90%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
      <input type="password" name="password" placeholder="Password" required style="width: 90%; padding: 10px; margin-bottom: 40px; border: 1px solid #ccc; border-radius: 4px;">

      <button type="submit" style="padding: 10px 20px; background-color: #4a90e2; color: white; border: none; border-radius: 4px; cursor: pointer;">Log In</button>
    </form>

    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "likh.le";

        $email = $_POST['email'];
        $user_password = $_POST['password'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM sign_up WHERE Email_Address = '$email' AND Password = '$user_password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['loggedin'] = true;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }

        $conn->close();
    }
    ?>

  </body>
</html>
