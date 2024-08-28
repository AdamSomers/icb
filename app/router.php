<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'controller.php';

function logEvent($eventName) {
    $current_time = date("Y-m-d H:i:s");
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $log_file = 'visits.log';
    $log_entry = "$eventName from $visitor_ip at $current_time\n";
    // Append the log entry to the file
    file_put_contents($log_file, $log_entry, FILE_APPEND);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'addComment') {
    logEvent('addComment');
    $current_time = date("Y-m-d H:i:s");
    addComment($current_time);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'getRandomComment') {
    logEvent('getRandomComment');
    $randomComment = getRandomComment();
    echo($randomComment);
}

?>