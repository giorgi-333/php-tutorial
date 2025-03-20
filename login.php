<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ავტორიზაცია</title>
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
    <h1>ავტორიზაცია</h1>
    <form method="post">
        <input type="text" name="gmail" placeholder="მეილი"> <br> <br>
        <input type="text" name="paswrod" placeholder="პაროლი"> <br> <br>
        <button name="login" type="submit">შესვლა</button>
        <button name="logOut" type="submit">გასვლა</button>
    </form>
</body>
</html>

<?php
include("./db_conn.php");

if(isset($_POST["login"])) {

    $gmail = $_POST["gmail"];
    $paswrod = $_POST["paswrod"];

    // ბაზა
    $sql = "SELECT * FROM users WHERE `gmail`='$gmail' AND `paswrod`='$paswrod'";
    $result = $connect->query($sql);
    $connect->close();


    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "ავტორზაცია მოხდა - " . $row["fullName"] .'<br>';
            $_SESSION["fullName"] = $row["fullName"];
            header("Location: index.php");
        }
        
    } else {
        echo 'არასწორი პაროლი ან მეილი';
    }
}

if(isset($_POST["logOut"])) {
    session_destroy();
    echo "თქვენ გამოხვედით საიტიდან";
    header("Refresh:0");
}