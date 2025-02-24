<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>რეგისტრაცია</title>
</head>
<body>
    <?php include("./header.php"); ?>
    <h1>გაიარეთ რეგისტრაცია</h1>
    <!-- action="form.php" -->
    <form method="post">
        <input type="text" name="fullName" placeholder="სახელი და გვარი"> <br> <br>
        <input type="text" name="gmail" placeholder="მეილი"> <br> <br>
        <input type="text" name="paswrod" placeholder="პაროლი"> <br> <br>
        <button type="submit">რეგისტრაცია</button>
        <button type="reset">გასუფთავება</button>
    </form>
</body>
</html>

<?php
include("./db_conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST["fullName"];
    $gmail = $_POST["gmail"];
    $paswrod = $_POST["paswrod"];

    // ბაზა
    $sql = "INSERT INTO `users`(`fullName`, `gmail`, `paswrod`) VALUES ('$fullName','$gmail','$paswrod')";

    if($connect->query($sql)) {
        echo "რეგიტრაცია წარმატებით გაიარეთ<br>";
    }

    $connect->close();

    print "სახელი გვარი: $fullName <br> მეილი: $gmail <br> პაროლი: $paswrod";
}