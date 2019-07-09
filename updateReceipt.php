<?php

include "dbFunctions.php";
$id = $_POST["id"];
$title = $_POST['title'];
$description = $_POST['description'];
$cost = $_POST["cost"];

$query = "UPDATE trackerbook SET title='$title', "
        . "description='$description', cost='$cost' WHERE id='$id' ";

$status = mysqli_query($link, $query) or die(mysqli_error($link));
if($status) {
    $row["status"] = $status;
    $row["message"] = "Receipt record is updated successfully.";
    echo json_encode($row);
} else {
    $row["status"] = $status;
    $row["message"] = "Update unsuccessful.";
    echo json_encode($row);
}

?>