<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php print isset($titleText) ? $titleText : "Coding World";  ?>
    </title>
</head>
<body>
<header style="display: flex; border-bottom: 2px solid green;">
        <h1>Coding world</h1>
        <div>
            <a href="index.php">Home</a>
            <a href="news.php">News</a>
            <a href="users.php">მომხმარებლები</a>
            <a href="registration.php">რეგისტრაცია</a>
            <a href="login.php">ავტორიზაცია</a>
        </div>
        <h1>
        <?php 
            if(isset($_SESSION["fullName"])) {
                echo $_SESSION["fullName"];
            } else {
                echo "გაიარეთ ავტორიზაცია";
            }
         ?>
        </h1>
</header>