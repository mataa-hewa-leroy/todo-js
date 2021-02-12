<?php 

include "connexion.php";

$isDone= 1;
$description= "hello thst is the first description";

$sql = 'INSERT INTO todo(isDone, descriptions) VALUES("'.$isDone.'","'.$description.'")';

if($conn->query($sql) === TRUE) {
    echo "Todo created";
}else {
  echo "Error:" .$sql. "<br>".$conn->error;
}
// $conn->close();
