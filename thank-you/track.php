<?php
// File: /thank-you/track.php

// Path to the JSON file in the same folder
$file = 'counter.json';

// Read the visit counts
$data = json_decode(file_get_contents($file), true);

// Sort dates in descending order
krsort($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Track Visitor Counts</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    h1 { color: #4CAF50; }
    table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    th { background-color: #f2f2f2; }
  </style>
</head>
<body>
  <h1>Visitor Counts by Date</h1>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Visits</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $date => $count): ?>
      <tr>
        <td><?php echo $date; ?></td>
        <td><?php echo $count; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
