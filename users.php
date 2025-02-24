<?php

include("./db_conn.php");

$sql = "SELECT `fullName`,`gmail` FROM users WHERE `gmail`='giorgi@gmail.com'";
$result = $connect->query($sql);
$connect->close();

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo $row["fullName"] . ' ' . $row["gmail"] . '<br>';
    }
    
} else {
    echo 'მონაცემები 0 არის';
}

  