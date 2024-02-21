<?php
include 'connectdb.php';
$del = "DELETE FROM persons WHERE id = 4";
$result = mysqli_query($conn, $del);
if ($result) {
    echo ("<br>Deleted");
} else {
    die("<br>deletion failed due to" . mysqli_error($conn));
}
?>