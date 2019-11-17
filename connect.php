<?php
$conn = mysqli_connect("localhost", "root", "", "php");

if (!$conn) {
    echo "Error: Failed connection to the DB." . PHP_EOL;
    echo "Depuration Errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Depuration Errno: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Connected!!!!!!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

mysqli_close($conn);
?>