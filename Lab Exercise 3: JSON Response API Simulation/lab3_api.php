<?php
header('Content-Type: application/json');

$user = [
    "id"     => 1,
    "name"   => "Christian",
    "email"  => "Christian@example.com",
    "status" => "active"
];

echo json_encode($user);