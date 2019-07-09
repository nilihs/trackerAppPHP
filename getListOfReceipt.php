<?php
include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT * FROM trackerbook ORDER by title"; 
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $allReceipts[] = $row;
}
mysqli_close($link);

echo json_encode($allReceipts);
?>
