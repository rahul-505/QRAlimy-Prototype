<?php
if (file_exists("parking_data.txt")) {
    echo file_get_contents("parking_data.txt");
} else {
    echo "No parking data found.";
}
?>
