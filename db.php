<?php
include 'sqlconnect.php';

$sql = "SELECT * FROM gpsname";
$result = $conn->query($sql);
?>

<h1>gpsname.com</h1>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["lat"]. " " . $row["lon"]. " " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
