<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    $data = "Username: " . $username . "\n\n";

    $file = fopen("user_data.txt", "a");

    fwrite($file, $data);

    fclose($file);

    echo "Login successful! Data saved.";
}
?>
