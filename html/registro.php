<?php
$pageTitle = "Registrarse";

require_once("functions/forms.php");

if($_POST){

// Validaciones
  // Nombre
  if (length(old('name'),2,40)) {
    addError('name', 'Tu nombre debe tener entre 2 y 40 caracteres');
  }

  // Apellido
  if (length(old('surname'),2,40)) {
    addError('surname', 'Tu nombre debe tener entre 2 y 40 caracteres');
  }

  // Email
  if (!isEmail(old('email'))) {
    addError('email', 'Debes escribir un email válido');
  }

  // Contraseña
  if (length(old('password'),6)) {
    addError('password','La contraseña debe tener 6 caracteres minimo');
  }

  if (!match(old('password'),old('repPassword'))) {
    addError('repPassword', 'Las contraseñas no coinciden');
  }

  // Terms
  if (empty(old('terms'))){
    addError('terms', 'Debe aceptar los terminos y condiciones para continuar');
  }

  // Redireccion
  if (isValid()) {
    header ('location: usuario.php');
  }
};

?>
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->

  <body>
    <!--Header-->
    <?php require_once("includes/header.php") ?>
    <!-- Header -->

    <div class="container-fluid">
      <div class="text-center mt-2">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center" action="includes/register.php" method="post">
          <h1>Creá tu cuenta</h1>
          <h3 class="h3 mb-3 font-weight-normal">Ingresa tus datos</h3>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nombre</label>
              <input type="text" name= "name" class="form-control" placeholder="Ingrese su nombre" value="<?= old('name') ?>">
              <?php if (hasError('name')) : ?>
                <small class="errors"><?= getError('name') ?></small>
              <?php endif; ?>
            </div>
            <div class="form-group col-md-6">
              <label for="surname">Apellido</label>
              <input type="text" name="surname" class="form-control" placeholder="Ingrese su apellido" value="<?= old('surname') ?>">
              <?php if (hasError('surname')) : ?>
                <small class="errors"><?= getError('surname') ?></small>
              <?php endif; ?>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Ingrese un nombre de usuario" value="<?= old('email') ?>">
            <?php if (hasError('email')) : ?>
              <small class="errors"><?= getError('email') ?></small>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Ingrese una contraseña"  value="<?= old('password') ?>">
            <?php if (hasError('password')) : ?>
              <small class="errors"><?= getError('password') ?></small>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="repPassword">Repita su Contraseña</label>
            <input type="password" name ="repPassword" class="form-control" placeholder="Repita su contraseña"  value="<?= old('repPassword') ?>">
            <?php if (hasError('repPassword')) : ?>
              <small class="errors"><?= getError('repPassword') ?></small>
            <?php endif; ?>
          </div>
          <div class="form-group form-check">
            <p>
              <input type="checkbox"  name="terms" class="form-check-input">
              <label class="form-check-label" for="terms"> Acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
            </p>
            <?php if (hasError('terms')) : ?>
              <small class="errors"><?= getError('terms') ?></small>
            <?php endif; ?>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Registrame</button>
          <p id="emailHelp" class="form-text text-muted">Ya tienes cuenta? <a href="login.php">Ingresa aqui</a>.</p>
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
