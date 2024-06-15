<?php
include '../db/db-connect.php';

if (!isset($_GET['id'])) {
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    $conn->close();
    exit;
}

$id = $_GET['id'];

$delete = $conn->query("DELETE FROM `schedule_list` where id = '$id'");

if ($delete) {
    echo "<script> alert('Event has been deleted successfully.'); location.replace('scheduler.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . $conn->error . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}

$conn->close();
?>
