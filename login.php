<?php session_start();?>
<?php
$dis ="none";
if(isset($_SESSION["login"])) {
    if($_SESSION["login"] == 0){
        $dis = "block";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login page</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- Header section starts Here -->
    <div class="header">
        <h1>The Perfect Cup</h1>
        <p>3481 MELROSE PLACE | BEVERLY HILLS, CA 90210 | 123.456.7890</p>
    </div>
    <!-- Header section ends Here -->
    <?php include('partials/menu.php');?>

    <!-- login section start Here -->
    <div class="login_form">
        <p class="warning">You must be logged in to view the blog.</p>
        <p class="warning" style= "<?php echo"display:".$dis; ?>">Wrong mail or Wrong password</p>
        <form  action="validation.php" method="post">
            <hr>
            <h3>LOGIN</h3>
            <hr>
            <div>
                <label for="mail">Email Address:</label><br>
                <input type="text"  name="mail" placeholder="email">
            </div>
            <div>
                <label for="pwd">password:</label><br>
                <input type="password"  name="pwd">
            </div>
            <input class ="submit" type="submit" value="Login">
            <br><br>
            <a href="register.php"> Not a memeber? Register Here</a>
        </form>
    </div>
    <!-- login section ends Here -->

    <!-- footer starts Here -->
    <?php include('partials/footer.php'); ?>
    <!-- footer ends Here -->
    
</body>
<html>