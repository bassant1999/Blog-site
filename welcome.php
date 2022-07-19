<?php 
session_start();
include('db/conn.php'); 
?>
<?php
    $fname = $_POST["fname"];
    $lname =$_POST["lname"];
    $mail = $_POST["mail"];
    $pwd = $_POST["pwd"];

    $sql = "SELECT mail FROM users WHERE mail='$mail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["reg"] = 1;
        header("location:http://localhost/coffee/register.php");
    } else {
        $sql = "INSERT INTO users VALUES ('$fname', '$lname', '$mail', '$pwd')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $_SESSION["reg"] = 2;
        header("location:http://localhost/coffee/");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>