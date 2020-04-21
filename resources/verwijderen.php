<?php
include 'db.php';

$Tag = $_POST['Verwijder'];

$sql = "DELETE FROM tags WHERE id=" . $Tag;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header( 'Location: ../tags.php' )
?>
