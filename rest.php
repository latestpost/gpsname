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
  $gpsname= $_REQUEST['gpsname'];
  $lat= $_REQUEST['lat'];
  $lon= $_REQUEST['lon'];
  $id= $_REQUEST['id'];

  $sql = "update gpsname set gpsname=$gpsname,lat=$lat,lon=$lon where id=$id";
  $result = $conn->query($sql);
  echo $sql;
}

$conn->close();
?>
