<?php

include 'model.php';

function addComment($commentText) {
    $dbPath = "/var/www/db/database.db";
    addCommentToDB($dbPath, $commentText);
}

function getRandomComment() {
    $dbPath = "/var/www/db/database.db";
    $randomComment = fetchRandomCommentFromDB($dbPath);
    return $randomComment;
}

?>