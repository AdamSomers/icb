<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        // Log the visit
        $log_file = 'visits.log';
        $current_time = date("Y-m-d H:i:s");
        $visitor_ip = $_SERVER['REMOTE_ADDR'];
        $log_entry = "Visit from $visitor_ip at $current_time\n";
        
        // Append the log entry to the file
        file_put_contents($log_file, $log_entry, FILE_APPEND);
    ?>
    <div class="container">
        <h1>Welcome to My Simple Landing Page!!!</h1>
        <button onclick="sayHello()">Say Hello</button>
        <button onclick="addComment()">Add Comment</button>
        <button onclick="getRandomComment()">Get Random Comment</button>
        <p id="result"></p>
    </div>

    <script src="script.js"></script>
</body>
</html>
