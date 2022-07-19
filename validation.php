<?php session_start();?>
<?php include('db/conn.php'); ?>
<?php
    $mail = $_POST["mail"];
    $pwd = $_POST["pwd"];

    $sql = "SELECT pwd FROM users WHERE mail='$mail'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo $row["pwd"];
        if($row["pwd"] != $pwd) {
            echo "wrong pwd";
            $_SESSION["login"] = 0;
            header("location:http://localhost/coffee/blog.php");
        }
        else{
            $_SESSION["login"] = 1;
            header("location:http://localhost/coffee/blog.php");
        }
    } else {
        $_SESSION["login"] = 0;
        header("location:http://localhost/coffee/blog.php");
    }
?>