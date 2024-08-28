<?php
function createCommentsTable($dbPath) {
    try {
        // Establish a connection to the SQLite database
        $db = new PDO("sqlite:$dbPath");

        // SQL statement to create a table
        $sql = "CREATE TABLE IF NOT EXISTS comments (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            comment TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        // Execute the statement
        $db->exec($sql);
        echo "Table 'comments' created successfully." . PHP_EOL;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage() . PHP_EOL;
    }
}
createCommentsTable("/var/www/db/database.db")
?>