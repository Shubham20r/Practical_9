<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date, Time, and Day Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<?php
// Set timezone
date_default_timezone_set('UTC'); // Replace 'UTC' with your desired timezone

// Get current date, time, and day
$currentDate = date('Y-m-d'); // Format: YYYY-MM-DD
$currentTime = date('H:i:s'); // Format: HH:MM:SS
$currentDay = date('l');      // Full textual representation of the day

// Display the results
echo "<h1>Current Date, Time, and Day</h1>";
echo "<p><strong>Date:</strong> $currentDate</p>";
echo "<p><strong>Time:</strong> $currentTime</p>";
echo "<p><strong>Day:</strong> $currentDay</p>";
?>
</body>
</html>