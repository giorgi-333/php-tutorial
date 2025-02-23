<?php

// სერვერის სახელი, მომხარებელი, პაროლი, ბაზის სახელი
$connect = new mysqli("localhost","coding","123","php_tutorial");

$sql = "SELECT * FROM users";
$result = $connect->query($sql);

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo $row["fullName"] . ' ' . $row["gmail"] . ' ' . $row["paswrod"] . '<br>';
    }
    
} else {
    echo 'მონაცემები 0 არის';
}

  