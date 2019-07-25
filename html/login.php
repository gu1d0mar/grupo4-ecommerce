<?php $tittle = "Iniciar Sesión" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->
  <body>
    <div class="container-fluid">
      <!--Header-->
      <?php require_once("includes/header.php") ?>
      <!-- Header -->
      <div class="text-center mt-2">
        <form class="col col-md-6 col-lg-4 m-auto bg-white border rounded p-3 text-center">
          <h1>Inicio</h1>
          <h3 class="h3 mb-3 font-weight-normal">Ingresa al sitio</h3>
          <div class="form-signin">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese nombre de usuario..." required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contrasena</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese contrasena..." required>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block" formaction="usuario.php">Ingresar</button>
          <small id="emailHelp" class="form-text text-muted">No tienes cuenta? <a href="registro.php">Ingresa aqui</a>.</small>
          <small id="emailHelp" class="form-text text-muted">Olvido su contrasena? <a href="#">Ingresa aqui</a></small>
        </form>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once("includes/footer.php") ?>
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
