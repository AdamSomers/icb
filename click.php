<?php

$log_file = 'visits.log';
$current_time = date("Y-m-d H:i:s");
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$log_entry = "click from $visitor_ip at $current_time\n";

// Append the log entry to the file
file_put_contents($log_file, $log_entry, FILE_APPEND);

?>