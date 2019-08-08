<?php $tittle = "Servicios" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->
  <body>
    <!-- Header -->
    <?php require_once("includes/header.php") ?>
    <!-- Header -->
    <div class="container-fluid">
      <!-- Filtros -->
      <!-- Filtros sm -->
      <div class="row justify-content-center d-sm-none mt-2">
        <div class="col">
          <div class="dropdown mb-2">
            <button class="btn btn-secondary w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filtros
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Filtro 1</a>
              <hr>
              <a class="dropdown-item" href="#">Filtro 2</a>
              <hr>
              <a class="dropdown-item" href="#">Filtro 3</a>
              <hr>
              <a class="dropdown-item" href="#">Filtro 4</a>
              <hr>
              <a class="dropdown-item" href="#">Filtro 5</a>
              <hr>
              <a class="dropdown-item" href="#">Filtro 6</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Filtros md -->
      <div class="row">
        <ul class="nav flex-column col d-none d-sm-block pl-3 ml-2 mt-2 rounded bg-white">
          <li class="nav-item pb-2 border-bottom d-none d-lg-block">
            <form class="form-inline pt-2">
              <div class="input-group w-100">
                <input class="form-control col" type="search" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-secondary col-2" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </li>
          <!-- Modal -->
          <li class="nav-item pb-2 border-bottom d-lg-none pt-2">
            <button type="button" class="btn btn-secondary btn-block " data-toggle="modal" data-target="#busquedaModal">
              <i class="fas fa-search"></i>
            </button>
          </li>
          <div class="modal fade" id="busquedaModal" tabindex="-1" role="dialog" aria-labelledby="busquedaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="busquedaModalLabel">Search</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="form-inline pt-2">
                    <div class="input-group">
                      <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Modal -->
          <li class="nav-item pt-2 pb-2 border-bottom">
            <div class="form-check">
              <label class="form-check-label" for="defaultCheck1">
                Filtro 1
              </label>
              <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
            </div>
          </li>
          <li class="nav-item pt-2 pb-2 border-bottom">
            <div class="form-check">
              <label class="form-check-label" for="defaultCheck1">
                Filtro 2
              </label>
              <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
            </div>
          </li>
          <li class="nav-item pt-2 pb-2 border-bottom">
            <div class="form-check">
              <label class="form-check-label" for="defaultCheck1">
                Filtro 3
              </label>
              <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
            </div>
          </li>
          <li class="nav-item pt-2 pb-2 border-bottom">
            <div class="form-check">
              <label class="form-check-label" for="defaultCheck1">
                Filtro 4
              </label>
              <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
            </div>
          </li>
          <li class="nav-item pt-2 pb-2 border-bottom">
            <div class="form-check">
              <label class="form-check-label" for="defaultCheck1">
                Filtro 5
              </label>
              <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
            </div>
          </li>
          <li class="nav-item pt-2 pb-2 border-bottom">
            <div class="form-check">
              <label class="form-check-label" for="defaultCheck1">
                Filtro 6
              </label>
              <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
            </div>
          </li>
        </ul>
        <!-- Productos -->
        <div class="col-10 offset-1 offset-sm-0 ml-sm-auto mt-sm-2 col-lg-9">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/depilation.jpg" class="card-img  m-auto" alt="depilacion">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/manicura.jpg" class="card-img  m-auto" alt="depilacion">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/peluqueria.jpg" class="card-img m-auto" alt="peluqueria">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/depilation.jpg" class="card-img  m-auto" alt="depilacion">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/manicura.jpg" class="card-img  m-auto" alt="depilacion">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/peluqueria.jpg" class="card-img m-auto" alt="peluqueria">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/depilation.jpg" class="card-img  m-auto" alt="depilacion">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/manicura.jpg" class="card-img  m-auto" alt="depilacion">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 col-xl-2 d-flex align-content-center">
                <img src="img/peluqueria.jpg" class="card-img m-auto" alt="peluqueria">
              </div>
              <div class="col-md-8 col-lg-9 col-xl-10 d-flex">
                <div class="card-body">
                  <h5 class="card-title"><a href="producto.php">Nombre del Local </a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                  <p class="card-text">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <a href="producto.php" class="btn btn-secondary">Servicios</a>
                  <a href="producto.php" class="btn btn-primary">Reservar</a>
                  <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small></p>
                </div>
              </div>
            </div>
            <div class="card-footer d-lg-none">
              <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i> Direccion</a></small>
            </div>
          </div>
        </div>
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
