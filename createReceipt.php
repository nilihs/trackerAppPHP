<?php
include "dbFunctions.php";

$title = $_POST['title'];
$description = $_POST['description'];
$cost = $_POST["cost"];

$query = "INSERT INTO trackerbook (title, description, cost) VALUES ('$title', '$description', '$cost')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status) {
    $row["status"] = $status;
    $row["message"] = "Receipt record is inserted successfully";
    echo json_encode($row);
} else {
    $row["status"] = $status;
    $row["message"] = "Create new Receipt unsuccessful.";
    echo json_encode($row);
}
?>