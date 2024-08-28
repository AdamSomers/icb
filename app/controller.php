<?php

include 'model.php';

$dbPath = "/var/www/db/database.db";

function addComment($commentText) {
    addCommentToDB($dbPath, $commentText);
}

function getRandomComment() {
    $randomComment = fetchRandomCommentFromDB($dbPath);
    return $randomComment;
}

?>