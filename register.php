<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Register page</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- Header section starts Here -->
    <div class="header">
        <h1>The Perfect Cup</h1>
        <p>3481 MELROSE PLACE | BEVERLY HILLS, CA 90210 | 123.456.7890</p>
    </div>
    <!-- Header section ends Here -->
    <?php include('partials/menu.php'); ?>

    <!-- registration section starts Here -->
    <?php 
    $dis= "none";
    if(isset($_SESSION["reg"])) {
        if($_SESSION["reg"] == 1) {
            $dis = "block";
        }
    }
    ?>
    <p class="warning" style= "<?php echo"display:".$dis; ?>">This mail already exist</p>
    <div class="register_form">
        <form  action="welcome.php" method="post">
            <hr>
            <h3>REGISTRATION FORM</h3>
            <hr>
            <div class="cont">
                <div>
                    <label for="fname">First name:</label><br>
                    <input type="text"  name="fname" placeholder="first name">
                </div> 
                <div>
                    <label for="lname">Last name:</label><br>
                    <input type="text"  name="lname" placeholder="last name">
                </div>
                <div>
                    <label for="mail">Email Address:</label><br>
                    <input type="text"  name="mail" placeholder="email">
                </div>
                <div>
                    <label for="pwd">password:</label><br>
                    <input type="password"  name="pwd">
                </div>
            </div>
            <input class ="submit" type="submit" value="Submit">
        </form>
    </div>
    <!-- registration section ends Here -->

    <!-- footer starts Here -->
    <?php include('partials/footer.php'); ?>
    <!-- footer ends Here -->
    
</body>
<html>