<?php 

include("db.php");
$nombre = '';
$apellido= '';
$estado = '';
$fechaN= '';
$direccion = '';
$motivoEnc= '';
$sexo = '';


if  (isset($_GET['idpreso'])) {
  $idpreso = $_GET['idpreso'];
  $query = "SELECT * FROM tbl_prisioneros WHERE idpreso=$idpreso";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $estado = $row['estado'];
    $fechaN = $row['fechaN'];
    $direccion = $row['direccion'];
    $motivoEnc = $row['motivoEnc'];
    $sexo = $row['sexo'];
    
  }
}

if (isset($_POST['update'])) {
  $idpreso = $_POST['idpreso'];
  $nombre= $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $estado = $_POST['estado'];
  $fechaN = $_POST['fechaN'];
  $direccion = $_POST['direccion'];
  $motivoEnc = $_POST['motivoEnc'];
  $sexo = $_POST['sexo'];

  

  $query = "UPDATE tbl_prisioneros set nombre = '$nombre', apellido = '$apellido', estado = '$estado', fechaN = '$fechaN', direccion = '$direccion', motivoEnc = '$motivoEnc', sexo = '$sexo' WHERE idpreso=$idpreso";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'tbl_prisioneros Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');

  exit(); 
}


?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?idpreso=<?php echo $_GET['idpreso']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update nombre">
        </div>
        <div class="form-group">
          <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>" placeholder="Update apellido">
        </div>
        <div class="form-group">
          <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Update estado">
        </div>
        <div class="form-group">
          <input name="fechaN" type="date" class="form-control" value="<?php echo $fechaN; ?>" placeholder="Update fechaN">
        </div>
        <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Update direccion">
        </div>
        <div class="form-group">
          <input name="motivoEnc" type="text" class="form-control" value="<?php echo $motivoEnc; ?>" placeholder="Update motivoEnc">
        </div>
        <div class="form-group">
          <input name="sexo" type="text" class="form-control" value="<?php echo $sexo; ?>" placeholder="Update sexo">
        </div>
        <form action="edit.php?idpreso=<?php echo $_GET['idpreso']; ?>" method="POST">
<input type="hidden" name="idpreso" value="<?php echo $_GET['idpreso']; ?>">

        <button class="btn-success" name="update">
         Editar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
