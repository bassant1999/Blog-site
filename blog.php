<?php session_start();?>
<?php
if(!isset($_SESSION["login"])) {
    header("location:http://localhost/coffee/login.php");
}
else{
    if($_SESSION["login"] == 0){
        header("location:http://localhost/coffee/login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Blog page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
    <!-- Header section starts Here -->
    <div class="header">
        <h1>Business Casual</h1>
        <p>3481 MELROSE PLACE | BEVERLY HILLS, CA 90210 | 123.456.7890</p>
    </div>
    <!-- Header section ends Here -->

    <?php include('partials/menu.php'); ?>

    <br>
    <!-- main section starts Here -->
    <div class="main_blog">
        <hr>
        <p>COMPANY BLOG</p>
        <a href ="logout.php"> LOG OUT </a>
        <hr>

        <div class="blog">
            <?php include('db/conn.php'); ?>
            <?php
            // echo $_GET['oid'];
            // echo $_GET['nid'];
            // echo $_GET['d'];
            $id = 1;
            $sql = "SELECT * FROM Blogs";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $id = $row["Blog_id"];
                $title = $row["title"];
                $date = $row["date"];
                $desc = $row["description"];
                $more = $row["more"];
                $image_name = $row["image_name"];
                // echo "id: " . $id. " - Name: " . $title. " " . $desc . "<br>";
            ?>

            <img src = <?php echo "images/". $image_name; ?>  alt =<?php echo  $image_name; ?> >
            <h2><?php echo $title; ?> </h2>
            <p><?php echo $date; ?> </p>
            <p>
            <?php echo $desc; ?>
            </p>
            <button class="button" onclick="document.getElementById('<?php echo $id; ?>').style.display='block'">Read More</button>
            <hr>
            <div id="<?php echo $id; ?>" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <span onclick="document.getElementById('<?php echo $id; ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h3><?php echo $title; ?></h3>
                        <hr>
                        <p><?php echo $more; ?></p>
                        <hr>
                    </div>
                </div>
            </div>
            <hr>

            <?php
              }
            } else {
              echo "0 results";
            }
            ?>
        </div>

        <div class="blog">
            <img src = "images/coffee2.jpg" alt ="coffee2">
            <h2>POST TITLE</h2>
            <p>OCTOBER 13, 2013</p>
            <p>
            Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <button class="button" onclick="document.getElementById('id01').style.display='block'">Read More</button>
            <hr>
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h3>coconut oil coffee</h3>
                        <hr>
                        <p>Some text. Some text. Some text.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="old_new">
            <button class="but"><a href="#" >Older</a></button>
            <button class="but"><a href="#" >Newer</a></button>
        </div>
    </div>
    <!-- main section ends Here -->

    <!-- footer starts Here -->
    <?php include('partials/footer.php'); ?>
    <!-- footer ends Here -->
   
</body>
<html>