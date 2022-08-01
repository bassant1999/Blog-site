<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Home page</title>
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

    <!-- congrats -->
    <?php 
    $dis= "none";
    if(isset($_SESSION["reg"])) {
        echo $_SESSION["reg"];
        if($_SESSION["reg"] == 2) {
            $dis = "block";
        }
    }
    ?>
    <p class="success" style= "<?php echo"display:".$dis; ?>">you have registered successifully</p>

    <!-- images Section Starts Here -->
    <div class = "container main_">
        <img src = "images/coffee3.jpg" alt ="coffee3">
        <div id="text">
            <p>Welcome To</p>
            <h1>The Perfect Cup</h1>
            <p>By <strong>Bassant Mahmoud</strong></p>
        </div>
        
    </div>
    <!-- images Section ends Here -->

    <!-- main section Starts Here -->
    <div class = "container main_">
        <hr>
        <h3>HOW TO MAKE <strong>THE PERFECT CUP OF COFFEE</strong></h3>
        <hr>
        <div class ="content_main">
            <div class="ileft">
                <img id="img" src = "images/coffee6.jpg" alt ="coffee6">
            </div>
            <div class="iright">
                Making the perfect cup of coffee can be challenging! With so many unique flavours and recipes to choose from, where do you begin? Our website provides you with the best recipes from around the world. Whether you prefer your coffee hot and mild or bracingly cold and strong - we are sure to have what you are looking for. For access to unlimited recipes you must register! Registration is free. Click here to get started!
            </div>
        </div>
    </div>
    <!-- main section ends Here -->

        <!-- footer starts Here -->
        <?php include('partials/footer.php'); ?>
    <!-- footer ends Here -->
    
</body>
<html>