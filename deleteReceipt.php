<?php

include "dbFunctions.php";
$id = $_POST["id"];

$query = "DELETE FROM trackerbook WHERE id='$id'";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

$row["success"] = $status;

mysqli_close($link);

if($status)
{
    $row["status"] = $status;
    $row["message"] = "Receipt record is deleted successfully";
    echo json_encode($row);
}else
{
    $row["status"] = $status;
    $row["message"] = "Delete new Receipt unsuccessful.";
    echo json_encode($row);
}

?>
