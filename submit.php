<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plate = $_POST['plate'] ?? 'Unknown';
    $location = $_POST['location'] ?? 'Unknown';

    $entry = "Plate: $plate\nLocation: $location\nTime: " . date("Y-m-d H:i:s") . "\n\n";
    file_put_contents("parking_data.txt", $entry, FILE_APPEND);

    echo "Parking info submitted successfully!";
}
?>
