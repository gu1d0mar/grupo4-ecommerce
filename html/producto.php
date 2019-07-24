<?php $tittle = "Producto" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php require_once("includes/header.php") ?>
      <!-- Header -->
      <div class="col-10 m-auto">
        <div class="w-100">
          <img src="img/banner.jpg" class="img-fluid my-2"alt="">
        </div>
        <div class="w-100">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="listado.php">Listado</a></li>
              <li class="breadcrumb-item active" aria-current="page">Peluqueria</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-12 col-md-9 pb-0">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4 col-lg-3 h-75 w-75 m-auto">
                  <img src="img/depilation.jpg" class="img-fluid" alt="depilacion">
                </div>
                <div class="col">
                  <div class="card-body pb-0">
                    <h3 class="card-title"><a href="producto.php">Nombre del Local </a></h3>
                    <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                    <a href="producto.php" class="btn btn-primary btn-block">Reservar</a>
                    <p class="card-text mt-2 lead">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                    <p class="card-text"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></p>
                  </div>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="card-body col-12 pb-0">
                  <div class="card-header">
                    <h4 class="card-subtitle"><i class="fas fa-cut"></i> Servicios</h4>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="carrito.php" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between">
                        Corte
                        <small class="text-muted">$300</small>
                      </li>
                    </a>
                    <a href="carrito.php" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between">
                        Corte
                        <small class="text-muted">$300</small>
                      </li>
                    </a>
                    <a href="carrito.php" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between">
                        Corte
                        <small class="text-muted">$300</small>
                      </li>
                    </a>
                  </div>
                  <div class="card-header">
                    <h4 class="card-subtitle"><i class="fas fa-paw"></i> Servicios</h4>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="carrito.php" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between">
                        Corte
                        <small class="text-muted">$300</small>
                      </li>
                    </a>
                    <a href="carrito.php" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between ">
                        Corte
                        <small class="text-muted">$300</small>
                      </li>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Reseñas</h5>
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Reseñas</h5>
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Reseñas</h5>
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
              </div>
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
