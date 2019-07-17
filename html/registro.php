<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/registro.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/d0267cb93b.js"></script>
      <title>Ingresa a Fernandez-Fernandez Coiffeur</title>
  </head>
  <body>
    <div class="container-fluid">
      <!--Header-->
      <?php require_once("includes/header.php") ?>
      <!-- Header -->
      <div class="row">
        <div class="col col-md-8 m-auto">
          <form class="form-group mt-3" action="usuario.php" method="post">
            <h1>Creá tu cuenta</h1>
            <p>Ingresa tus datos</p>
            <hr>
            <label for="email"><b>E-mail</b></label>
            <input type="email" placeholder="Ingrese su correo..." name="email" required>
            <label for="psw"><b>Clave</b></label>
            <input type="password" placeholder="Ingrese contrasena..." name="psw" required>
            <label for="psw-repeat"><b>Repita Clave</b></label>
            <input type="password" placeholder="Repita contrasena..." name="psw-repeat" required>
            <hr>
            <input type="checkbox" name="acepto"> Acepto los <a href="faq.php">Términos y condiciones</a> de Fernandez-Fernandez Coiffure.
            <hr>
            <button type="submit" class="registerbtn">Crear cuenta</button>
            <div class="col signin p-3">
              <p>Ya tienes cuenta? <a href="login.php">Ingresa aquí</a>.</p>
            </div>
          </form>
        </div>
      </div>
      <!-- Footer -->
      <?php require_once("includes/footer.php") ?>
      <!-- Footer -->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
