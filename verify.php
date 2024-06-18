<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM username_password WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $conn->close();
        header("Location: submain.html");
        exit();
    } else {

        echo "<font size=5 color=red>","Login failed. Please check your credentials and try again!","</font>","<br>";
        echo "<font size=5>","If new user, please register.","</font>";
    }
    $conn->close();
}
?>
      
