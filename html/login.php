<?php
$pageTitle = "Iniciar Sesión";

require_once("functions/forms.php");

if($_POST){

// Validaciones
  // Completar
  if (empty(old('password'))){
    addError('password','Ingrese su contraseña');
  }

  //Email
  if (!isEmail(old('email'))) {
    addError('email', 'Debes escribir un email válido');
  }

  // Redireccion
  if (isValid()) {
    header ('location: usuario.php');
  }

}

?>
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->

  <body>
    <!--Header-->
    <?php require_once("includes/header.php") ?>
    <!-- Header -->

    <div class="container-fluid">
      <div class=" mt-2">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center" method="post">
          <h1>Inicio</h1>
          <h3 class="h3 mb-3 font-weight-normal">Ingresa al sitio</h3>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Ingrese su email" name="email" value="<?= old('email') ?>">
            <?php if (hasError('email')) : ?>
              <small class="errors"><?= getError('email') ?></small>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="password" value="<?= old('password') ?>">
            <?php if (hasError('password')) : ?>
              <small class="errors"><?= getError('password') ?></small>
            <?php endif; ?>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label" for="remember">Recordarme</label>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Ingresar</button>
          <small class="form-text text-muted">No tienes cuenta? <a href="registro.php">Ingresa aqui</a></small>
          <small class="form-text text-muted"><a href="#">Olvido su contrasena?</a></small>
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
