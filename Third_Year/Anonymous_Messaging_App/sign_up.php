<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sign.Up</title>
  </head>
  <body style="background-color: #f5f5f5; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 600px;">
    <form method="POST" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px; text-align: center;">
      <h1 style="font-size: 60px; color: #4a90e2;">Sign.Up</h1>

      <input type="email" name="email" placeholder="Email" required style="width: 90%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
      <input type="password" name="password" placeholder="Password" required style="width: 90%; padding: 10px; margin-bottom: 40px; border: 1px solid #ccc; border-radius: 4px;">

      <label style="font-size: 14px; display: block; margin-bottom: 15px;">
        <input type="checkbox" name="agree" required> I agree to the terms and conditions of Likh.le
      </label>

      <button type="submit" style="padding: 10px 20px; background-color: #4a90e2; color: white; border: none; border-radius: 4px; cursor: pointer;">Sign Up</button>
    </form>

    <?php
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

        $sql = "INSERT INTO sign_up (Email_Address, Password) VALUES ('$email', '$user_password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Sign-up successful! Try loggin in!');</script>";
        }
        else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
        


        $conn->close();

    }
?>

  </body>
</html>
