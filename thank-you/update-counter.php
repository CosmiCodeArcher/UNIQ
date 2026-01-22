<?php
// File: /thank-you/update-counter.php

// Path to the JSON file in the same folder
$file = 'counter.json';

// Read the current counts
$data = json_decode(file_get_contents($file), true);

// Get today's date (YYYY-MM-DD)
$today = date('Y-m-d');

// Increment today's count
if (!isset($data[$today])) {
    $data[$today] = 0;
}
$data[$today]++;

// Save the updated counts back to the file
file_put_contents($file, json_encode($data));

// Return a success response
echo json_encode(["message" => "Visit logged", "today" => $data[$today]]);
?>
