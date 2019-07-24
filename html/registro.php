<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link rel="stylesheet" href="css/registro.css"> -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/d0267cb93b.js"></script>
      <title>Ingresa a Fernandez-Fernandez Coiffeur</title>
  </head>
  <body>
    <div class="container-fluid">
      <!--Header-->
      <?php require_once("includes/header.php") ?>
      <!-- Header -->
      <div class="text-center">
        <h1>Creá tu cuenta</h1>
        <h3 class="h3 mb-3 font-weight-normal">Ingresa tus datos</h3>
        <form class="col col-md-4 m-auto">
          <div class="form-signin">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese nombre de usuario..." required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contrasena</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese contrasena..." required>
            <label for="exampleInputPassword2">Repita Contrasena</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repita contrasena..." required>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1"> Acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block" formaction="login.php">Registrame</button>
          <small id="emailHelp" class="form-text text-muted">Ya tienes cuenta? <a href="login.php">Ingresa aqui</a>.</small>
        </form>
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
