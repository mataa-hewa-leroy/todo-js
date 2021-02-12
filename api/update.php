<?php 

include "connexion.php";
$id = 1;
$isDone= 0;
$description= "hello thst is the second description";
// $sql = 'INSERT INTO todo(isDone, descriptions) VALUES("'.$isDone.'","'.$description.'")';

// $sql = "UPDATE todo SET isDone=`$isDone`,descriptions=`$description` WHERE id='$id'";
$sql ="UPDATE todo set isDone='" . $isDone . "', descriptions='" . $description . "' WHERE id='" . $id . "'";


// echo $sql;

if($conn->query($sql) === TRUE) {
    echo "Todo updated";
}else {
  echo "Error:" .$sql. "<br>".$conn->error;
}
$conn->close();
