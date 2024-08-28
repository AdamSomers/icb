<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'clicked') {
    // PHP code to execute when the button is clicked
    echo "Button was clicked! PHP code executed.";
    // Perform other actions as needed
    $log_file = 'visits.log';
    $current_time = date("Y-m-d H:i:s");
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $log_entry = "click from $visitor_ip at $current_time\n";

    // Append the log entry to the file
    file_put_contents($log_file, $log_entry, FILE_APPEND);
}


?>