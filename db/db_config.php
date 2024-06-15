<?php
include('db-connect.php');

function insertSchedule($conn, $user_id, $title, $description, $start, $end) {
    $stmt = $conn->prepare("INSERT INTO schedule_list (user_id, title, description, start_datetime, end_datetime) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param("issss", $user_id, $title, $description, $start, $end);
    return $stmt->execute();
}
?>
