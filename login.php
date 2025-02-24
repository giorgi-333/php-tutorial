<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ავტორიზაცია</title>
</head>
<body>
    <?php include("./header.php"); ?>
    <h1>ავტორიზაცია</h1>
    <form method="post">
        <input type="text" name="gmail" placeholder="მეილი"> <br> <br>
        <input type="text" name="paswrod" placeholder="პაროლი"> <br> <br>
        <button type="submit">შესვლა</button>
    </form>
</body>
</html>

<?php
include("./db_conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $gmail = $_POST["gmail"];
    $paswrod = $_POST["paswrod"];

    // ბაზა
    $sql = "SELECT * FROM users WHERE `gmail`='$gmail' AND `paswrod`='$paswrod'";
    $result = $connect->query($sql);
    $connect->close();


    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "ავტორზაცია მოხდა - " . $row["fullName"] .'<br>';
        }
        
    } else {
        echo 'არასწორი პაროლი ან მეილი';
    }

    
}