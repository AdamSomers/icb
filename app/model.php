<?php

function addCommentToDB($dbPath, $commentText) {
    try {
        // Establish a connection to the SQLite database
        $db = new PDO("sqlite:$dbPath");

        // Prepare the SQL statement to insert a comment
        $sql = "INSERT INTO comments (comment) VALUES (:comment)";
        $stmt = $db->prepare($sql);

        // Bind the comment text to the prepared statement
        $stmt->bindParam(':comment', $commentText, PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();
        echo "Comment added successfully." . PHP_EOL;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage() . PHP_EOL;
    }
}

function fetchCommentFromDB($dbPath, $id) {
    try {
        // Establish a connection to the SQLite database
        $db = new PDO("sqlite:$dbPath");

        // Prepare the SQL statement to fetch a comment by its ID
        $sql = "SELECT * FROM comments WHERE id = :id";
        $stmt = $db->prepare($sql);

        // Bind the ID to the prepared statement
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        $stmt->execute();

        // Fetch the comment
        $comment = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($comment) {
            return $comment;
        } else {
            echo "No comment found with ID $id." . PHP_EOL;
            return null;
        }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage() . PHP_EOL;
        return null;
    }
}

function fetchRandomCommentFromDB($dbPath) {
    try {
        // Establish a connection to the SQLite database
        $db = new PDO("sqlite:$dbPath");

        // Prepare the SQL statement to fetch a random comment
        $sql = "SELECT * FROM comments ORDER BY RANDOM() LIMIT 1";
        $stmt = $db->prepare($sql);

        // Execute the statement
        $stmt->execute();

        // Fetch the random comment
        $comment = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($comment) {
            return $comment[0];
        } else {
            echo "No comments found." . PHP_EOL;
            return null;
        }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage() . PHP_EOL;
        return null;
    }
}
?>