<?php 
session_start();
require("./functions.php") 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php include("./header.php"); ?>
    <h1>
         <?php 
            if(isset($_SESSION["fullName"])) {
                echo "მომხამარებელი: " . $_SESSION["fullName"];
            } else {
                echo "გაიარეთ ავტორიზაცია";
            }
         ?>
    </h1>
    <h1>Home Page</h1>
    <h3>
        <!-- <?php echo $x; ?> -->
         <?php include('oop.php'); ?>
    </h3>
</body>
</html>