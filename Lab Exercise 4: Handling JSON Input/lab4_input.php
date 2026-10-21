<?php
header('Content-Type: text/plain');

$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

if ($data === null) {
    echo "No valid JSON received.";
    exit;
}

echo "Username: " . ($data['username'] ?? '') . "\n";
echo "Password: " . ($data['password'] ?? '');