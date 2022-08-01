
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Contact page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
    <!-- Header section starts Here -->
    <div class="header">
        <h1>The Perfect Cup</h1>
        <p>3481 MELROSE PLACE | BEVERLY HILLS, CA 90210 | 123.456.7890</p>
    </div>
    <!-- Header section ends Here -->

    <!-- menu -->
    <?php include('partials/menu.php'); ?>

    <!-- map starts Here -->
    <div class="container main_">
        <hr>
        <h3>CONTACT <strong>THE PERFECT CUP</strong></h3>
        <hr>
        <div class="content_main"> 
            <iframe class="cleft" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13817.368406373815!2d31.403045635002155!3d30.027041838113963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cfd5e540799%3A0x4a397398c27f4413!2sCairo%20Festival%20City%2C%20Nasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1658602044280!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="cright">
                <p>Phone: <span>123.456.7890</span></p>
                <p>Email: <a href="#">info@theperfectcup.com</a></p>
                <p>Address: <span>Cairo <br> New Cairo, Nasr city</span></p>
            </div>
        </div>
    </div>
    <!-- map ends Here -->

    <!-- contact form starts Here -->
    <div class="container main_">
        <form  action="emails/send.php" method="post">
            <hr>
            <h3>CONTACT <strong>FORM</strong></h3>
            <hr>
            <div class="cont">
                <div>
                    <label for="name">Name</label><br>
                    <input type="text"  name="name" placeholder="Name" maxlength="100" size="50">
                </div> 
                <div>
                    <label for="mail">Email Address</label><br>
                    <input type="text"  name="mail" placeholder="email" maxlength="100" size="50">
                </div>
                <div id="tarea">
                    <label>Message</label><br>
                    <textarea id="econt" name="econt" rows="6"  maxlength="100"></textarea>
                </div>
            </div>
            <input class ="submit" type="submit" value="Submit">
        </form>
    </div>
    <!-- Contact form ends here -->
    <!-- footer -->
    <?php include('partials/footer.php'); ?>
</body>
<html>