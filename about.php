
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
    <title>About page</title>
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

    <!-- main starts Here -->
    <div class="container main_">
        <hr>
        <h3>CONTACT <strong>THE PERFECT CUP</strong></h3>
        <hr>
        <div class="content_main">
            <iframe class="cleft" height="600" src="https://www.youtube.com/embed/ooUAVHJAcyk" title="6 Unique Ways To Drink Coffee" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="cright">
            The Perfect Cup launched in 2000, in the heart of California. Our mission is simple. We want to teach coffee drinkers all over the world how to make the perfect blend! Our Coffee experts have a lifelong passion for coffee. They are internationally traveled and have experienced many varieties.
            </div>
        </div>
    </div>
    <!-- main ends Here -->

    <!-- team -->
    <div class="container main_">
        <hr>
        <h3>OUR <strong>TEAM</strong></h3>
        <hr>
        <div class="content_main about">
            <div>
                <img src = "images/team1.jpg" alt ="team1">
                <h2>jane brown</h2>
            </div>
            <div>
                <img src = "images/team2.jpg" alt ="team2">
                <h2>losy fan</h2>
            </div>
            <div>
                <img src = "images/team3.jpg" alt ="team3">
                <h2>jenifar loloy</h2>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('partials/footer.php'); ?>
</body>
<html>