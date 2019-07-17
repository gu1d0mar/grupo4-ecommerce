<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d0267cb93b.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Perfil</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php require_once("includes/header.php") ?>
      <!-- Header -->
      <div class="row">
        <!-- Izquierda -->
        <div class="col-md-3">
          <div class="card my-3 p-2 ">
            <div class="card-img text-center">
              <h4>BatiBruno39</h4>
              <img src="img/batman.jpg" alt="avatar" class="rounded-circle w-50 h-50 ">
            </div>
            <hr>
            <p class="card-text"> <i class="fas fa-home"></i>  Ciudad Gotica, DC</p>
            <p class="card-text"> <i class="fas fa-birthday-cake"></i>  19/02/1939</p>
            <p class="card-text"><a href="carrito.php" class="text-body"><i class="far fa-calendar-alt"></i> Mis turnos</p></a>
          </div>
          <div class="card mb-3 p-2 bg-secondary ">
            <ul class="list-group bg-secondary ">
              <li class="list-group-item bg-secondary border-0 pl-0 pt-1"><a href="#" class="text-white"><i class="fas fa-history"></i> Historial</a></li>
              <li class="list-group-item bg-secondary border-0 pl-0 pt-1"><a href="#" class="text-white"><i class="far fa-heart"></i> Favoritos</a></li>
              <li class="list-group-item bg-secondary border-0 pl-0 pt-1 pb-1"><a href="#" class="text-white"><i class="far fa-star"></i> Reseñas</a></li>
            </ul>
          </div>
          <div class="card mb-3 d-md-none">
            <div class="card-header">
              <h5>Proximamente</h5>
            </div>
            <div class="card-body p-2 text-center">
                <img src="img/depilation.jpg" alt="turno" class="card-img w-75 h-75 pb-2">
                <p class="card-text">Corte en Peluqueria Don Pepito</p>
                <small class="text-muted">Martes 15 20:00</small>
            </div>
          </div>
        </div>
        <!--Centro -->
        <div class="col-md-6 col-xl-7">
          <div class="card my-3">
            <div class="card-header">
              <p class="text-muted mb-0">Dejanos tu reseña acerca del lugar al que fuiste</p>
            </div>
            <div class="card-body p-2">
              <form>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </form>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <p class="text-muted mb-0">Visitaste:</p>
            </div>
            <div class="card-body">
              <div class="row no-gutters">
                <div class="col-md-4 col-lg-3 h-75 w-75 m-auto">
                  <img src="img/manicura.jpg" class="img-fluid" alt="manicura">
                </div>
                <div class="col">
                  <div class="card-body pb-0">
                    <h3 class="card-title"><a href="producto.php">Nombre del Local </a></h3>
                    <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                    <p class="card-text mt-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <small class="text-muted">Hace una semana</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Derecha -->
        <div class="col-md-3 col-xl-2">
          <div class="card my-3 d-none d-md-block">
            <div class="card-header">
              <h6>Proximamente</h6>
            </div>
            <div class="card-body p-2 text-center">
                <img src="img/depilation.jpg" alt="turno" class="card-img w-75 h-75 pb-2">
                <p class="card-text">Corte en Peluqueria Don Pepito</p>
                <small class="text-muted">Martes 15 20:00</small>
            </div>
          </div>
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
