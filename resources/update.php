<?php
include 'db.php';

$item = $_POST['Item'];
$tag = $_POST['Tag'];

$sql = "UPDATE items SET tag='" . $tag . "' WHERE id=" . $item . "";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header( 'Location: ../index.php' )
?>
