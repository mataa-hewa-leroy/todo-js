<?php 

include "connexion.php";

$sql = "SELECT * FROM todo";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);

  } else {
    echo "0 results";
  }
  $conn->close();