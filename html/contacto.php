<?php
$pageTitle = "Contacto";

require_once("functions/forms.php");

if($_POST) {

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

    // Pais
    if (empty(old('pais'))) {
      addError('pais', 'Debes seleccionar un país');
    }

    //Comentarios
    if (empty(old('comentario'))) {
      addError('comentario', 'Debes dejar un mensaje');
    }

    // Terms
    if (empty(old('terms'))) {
      addError('terms', 'Debes aceptar los terminos y condiciones');
    }

    // Redireccion
    if (isValid()) {
      header ('location: index.php');
    }
}
?>
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->

  <body>
    <!-- Header -->
    <?php require_once("includes/header.php") ?>
    <!-- Header -->

    <div class="container-fluid">
      <div class="text-center mt-2">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center" action="contacto.php" method="post">
          <h1>Contacto</h1>
          <h3 class="h3 mb-3 font-weight-normal">Dejanos tu mensaje</h3>
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
            <label for="pais">País</label>
            <select name="pais" class="form-control">
              <option value="">Elige tu país</option>
              <option value="Argentina" <?= selected(old('pais'), 'Argentina') ?>>Argentina</option>
              <option value="Chile" <?= selected(old('pais'), 'Chile') ?>>Chile</option>
              <option value="Uruguay" <?= selected(old('pais'), 'Uruguay') ?>>Uruguay</option>
            </select>
            <?php if (hasError('pais')) : ?>
              <small class="errors"><?= getError('pais') ?></small>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="comentario">Comentarios</label>
            <textarea class="form-control" name="comentario" placeholder="Deja tu comentario" rows="4" ><?= old('comentario') ?></textarea>
          </div>
          <?php if (hasError('comentario')) : ?>
            <p>
              <small class="errors"><?= getError('comentario') ?></small>
            </p>
          <?php endif; ?>
          <div class="form-check">
            <p>
              <input type="checkbox" name="terms" class="form-check-input" <?= checked(old('terms')) ?>>
              <label class="form-check-label" for="terms">Acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
            </p>
            <?php if (hasError('terms')) : ?>
              <p>
                <small class="errors"><?= getError('terms') ?></small>
              </p>
            <?php endif; ?>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Enviar</button>
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
