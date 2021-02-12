<?php 

include "connexion.php";
$id = 1;

$sql = "DELETE FROM todo WHERE id='" . $id . "'";

if($conn->query($sql) === TRUE) {
    echo "Todo deleted";
}else {
  echo "Error:" .$sql. "<br>".$conn->error;
}
$conn->close();
