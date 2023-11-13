<?php

include('db.php');

if (isset($_POST['save_tbl_prisioneros'])) {
  $idpreso = mysqli_real_escape_string($conn, $_POST['idpreso']);
  $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
  $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
  $estado = mysqli_real_escape_string($conn, $_POST['estado']);
  $fechaN = mysqli_real_escape_string($conn, $_POST['fechaN']);
  $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);
  $motivoEnc = mysqli_real_escape_string($conn, $_POST['motivoEnc']);
  $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
  
  $query = "INSERT INTO tbl_prisioneros(idpreso, nombre, apellido, estado, fechaN, direccion, motivoEnc, sexo) VALUES ('$idpreso', '$nombre', '$apellido', '$estado', '$fechaN', '$direccion', '$motivoEnc', '$sexo')";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'tbl_prisioneros Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
