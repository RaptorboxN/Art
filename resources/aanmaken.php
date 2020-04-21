<?php
include 'db.php';

$Title = $_POST['Title'];

$sql = "INSERT INTO tags (title) VALUES ('" . $Title . "')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header( 'Location: ../tags.php' )
?>
