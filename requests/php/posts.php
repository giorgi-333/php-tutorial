<?php

$posts = [
    [
        "name" => "tbilisi",
        "text" => "about tbilisi city"
    ],
    [
        "name" => "qutaisi",
        "text" => "about qutaisi city"
    ]
];

header("Content-type: application/json");

echo json_encode($posts);

?>