<?php $tittle = "Registrarse" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Head -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/d0267cb93b.js"></script>
    <title>P&P - <?=$tittle?></title>
  </head>

  <!-- Head -->
  <body>
    <div class="container-fluid">
      <!--Header-->
      <div class="row">
        <header class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php">Nombre a definir</a>
          <div class="navbar-text my-2 my-lg-0 d-lg-none" style="font-size:22px;">
            <a href="usuario.php"><i class="far fa-user"></i></a>
            <a href="carrito.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="listado.php">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.php">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
          <div class="navbar-text my-2 my-lg-0 d-none d-lg-block" style="font-size:22px;">
            <a href="usuario.php"><i class="far fa-user"></i></a>
            <a href="carrito.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </header>
      </div>

      <!-- Header -->
      <div class="text-center mt-4">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center">
          <h1>Creá tu cuenta</h1>
          <h3 class="h3 mb-3 font-weight-normal">Ingresa tus datos</h3>
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
    </div>
    <!-- Footer -->
    <footer class="bg-dark container-fluid footer">
      <div class="container">
        <nav class="navbar navbar-dark bg-dark justify-content-center justify-content-md-between">
          <ul class="navbar-nav text-center text-md-left">
            <li class="nav-item">
              <a class="nav-link" href="faq.php">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">Terminos y condiciones</a>
            </li>
          </ul>
          <a class="navbar-brand d-none d-lg-block" href="index.php">Nombre a definir</a>
          <div>
            <div class="form-label text-white d-none d-md-block">
              <label for="newsletter">Suscribite</label>
              <p class="text-muted">Y enterate de todas las novedades</p>
            </div>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-1 col-9" type="mail" placeholder="Suscribite" name="newsletter">
              <button class="btn btn-outline-success my-2 my-sm-0 col-2" type="submit"><i class="far fa-envelope"></i></button>
            </form>
          </div>
        </nav>
      </div>
    </footer>
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
