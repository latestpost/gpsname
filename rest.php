<?php
 header("Access-Control-Allow-Origin: *");
include 'sqlconnect.php';

$sql = "SELECT * FROM gpsname";
$result = $conn->query($sql);

if ($result) {
    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
}

$conn->close();
?>
