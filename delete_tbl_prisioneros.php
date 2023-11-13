<?php

include("db.php");

if(isset($_GET['idpreso'])) {
  $idpreso = $_GET['idpreso'];
  $query = "DELETE FROM tbl_prisioneros WHERE idpreso = $idpreso";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
 
  $_SESSION['message'] = 'tbl_prisioneros Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
