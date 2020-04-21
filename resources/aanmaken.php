<?php
include 'db.php';

$Title = $_POST['Title'];
$Color = $_POST['Color'];

$sql = "INSERT INTO tags (title, color) VALUES ('" . $Title . "', '" . $Color . "')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header( 'Location: ../tags.php' )
?>
