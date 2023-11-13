<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD tbl_prisioneros FORM -->
      <div class="card card-body">
        <form action="save_tbl_prisioneros.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="tbl_prisioneros nombre" autofocus>
          </div>
          <div class="form-group">
       <input type="text" name="apellido" class="form-control" placeholder="tbl_prisioneros apellido" autofocus>
          </div>

          <div class="form-group">
       <input type="text" name="estado" class="form-control" placeholder="tbl_prisioneros estado" autofocus>
          </div>

          <div class="form-group">
       <input type="date" name="fechaN" class="form-control" placeholder="fechaN" autofocus>
          </div>

          <div class="form-group">
       <input type="text" name="direccion" class="form-control" placeholder="tbl_prisioneros direccion" autofocus>
          </div>

          <div class="form-group">
       <input type="text" name="motivoEnc" class="form-control" placeholder="tbl_prisioneros motivoEnc" autofocus>
          </div>

          <div class="form-group">
       <input type="text" name="sexo" class="form-control" placeholder="tbl_prisioneros sexo" autofocus>
          </div>

          
          <input type="submit" name="save_tbl_prisioneros" class="btn btn-success btn-block" value="Save tbl_prisioneros">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Idpreso</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Estado</th>
            <th>FechaN</th>
            <th>Direccion</th>
            <th>MotivoEncierro</th>
            <th>Sexo</th>
          </tr>
        </thead>
        <tbody>
        
          <?php
          $query = "SELECT * FROM tbl_prisioneros";
          $result_tbl_prisioneross = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tbl_prisioneross)) { ?>
          <tr>
            <td><?php echo $row['idpreso']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['fechaN']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['motivoEnc']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
      
            <td>
              <a href="edit.php?idpreso=<?php echo $row['idpreso']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_tbl_prisioneros.php?idpreso=<?php echo $row['idpreso']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
