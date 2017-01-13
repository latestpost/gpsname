<?php
 header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE');
 header("Access-Control-Allow-Origin: *");
 $method = $_SERVER['REQUEST_METHOD'];
include 'sqlconnect.php';

if ($method=="GET"){
  $sql = "SELECT * FROM gpsname";
  $result = $conn->query($sql);

  if ($result) {
      while($row = $result->fetch_array(MYSQL_ASSOC)) {
              $myArray[] = $row;
      }
      echo json_encode($myArray);
  }
}

if ($method=="POST"){
  echo json_encode("post");
}

$conn->close();
?>
