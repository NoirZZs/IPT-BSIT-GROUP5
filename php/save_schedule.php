<?php
session_start();
include '../db/db_config.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    exit;
}

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    echo "<script> alert('Error: User ID not set.'); location.replace('./') </script>";
    exit;
}

$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$start = isset($_POST['start_datetime']) ? $_POST['start_datetime'] : '';
$end = isset($_POST['end_datetime']) ? $_POST['end_datetime'] : '';

if (empty($title) || empty($description) || empty($start) || empty($end)) {
    echo "<script> alert('Error: Missing required fields.'); location.replace('./') </script>";
    exit;
}

if (insertSchedule($conn, $user_id, $title, $description, $start, $end)) {
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('scheduler.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . $conn->error . "<br>";
    echo "</pre>";
}

$conn->close();
?>
