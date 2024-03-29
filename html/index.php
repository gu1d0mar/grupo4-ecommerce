<?php $pageTitle = "Home" ?>

<!-- Head -->
<?php require_once("includes/head.php") ?>
<!-- Head -->

  <body>
    <!--Header-->
    <?php require_once("includes/header.php") ?>
    <!-- Header -->

    <!-- Carrousel -->
    <div role="main" class="d-none d-md-block mb-3">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carrousel1.jpg" alt="1" width="100%" height="100%">
          </div>
          <div class="carousel-item">
            <img src="img/carrousel2.jpg" alt="1" width="100%" height="100%">
          </div>
          <div class="carousel-item">
            <img src="img/carrousel3.jpg" alt="1" width="100%" height="100%">
          </div>
          <section class="search-sec">
            <form action="" method="post" novalidate="novalidate">
              <div class="row ">
                <div class="col-lg-12">
                  <div class="row searchg">
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                      <input type="text" class="form-control search-slt" placeholder="Introduzca Ciudad">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                      <input type="text" class="form-control search-slt" placeholder="Introduzca Servicio">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                      <button type="button" class="btn btn-primary wrn-btn" onclick="location.href='producto.php'" >Buscar</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- Carrousel -->

    <div class="fondo">
      <div class="container">
        <div class="recomend">
          <div class="text-center">
            <h2>Lo mejor para vos</h2>
            <p>Reserva online facil y rapido. Los mejores locales y profesionales te esperan</p>
          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <a href="producto.php"><img src="img/depilation.jpg" alt="depilation" class="rounded-circle" width="200" height="200"></a>
              <h2>Nombre del local</h2>
              <a class="btn btn-secondary" href="producto.php" role="button">Ver servicios</a>
            </div>
            <div class="col-md-4">
              <a href="producto.php"><img src="img/manicura.jpg" alt="manicura" class="rounded-circle" width="200" height="200"></a>
              <h2>Nombre del local</h2>
              <a class="btn btn-secondary" href="producto.php" role="button">Ver servicios</a>
            </div>
            <div class="col-md-4">
              <a href="producto.php"><img src="img/peluqueria.jpg" alt="peluqueria" class="rounded-circle" width="200" height="200"></a>
              <h2>Nombre del local</h2>
              <a class="btn btn-secondary" href="producto.php" role="button">Ver servicios</a>
            </div>
          </div>
        </div>

        <hr class="divider">

        <div class="row info">
          <div class="col-md-7 order-md-2 info-text">
            <h2 class="featurette-heading">Reserva lo que quieras, donde quieras, cuando quieras</h2>
            <p class="lead">Queremos facilitarte la vida, y queremos verte bien, asi que ingresa la direccion y decinos lo que queres, y blablablablabala </p>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="img/amigos.jpg" alt="m" class="img-fluid mx-auto" width="100%" height="100%">
          </div>
        </div>

        <hr class="divider">

        <div class="resena">
          <div class="text-center">
            <h2>La opinion de nuestros usuarios</h2>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body p-2 text-center">
                    <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
                    <p class="card-text"><small class="text-muted">Brunito</small></p>
                    <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
                    <small class="text-muted">Nombre del local al que fue</small>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body p-2 text-center">
                  <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
                  <p class="card-text"><small class="text-muted">Brunito</small></p>
                  <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                  <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
                  <small class="text-muted">Nombre del local al que fue</small>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body p-2 text-center">
                    <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
                    <p class="card-text"><small class="text-muted">Brunito</small></p>
                    <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
                    <small class="text-muted">Nombre del local al que fue</small>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body p-2 text-center">
                    <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
                    <p class="card-text"><small class="text-muted">Brunito</small></p>
                    <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
                    <small class="text-muted">Nombre del local al que fue</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="divider">

        <div class="unite text-center">
          <div class="row">
            <div class="col-md-5 order-md-2 info-text">
              <h2 class="featurette-heading">Unite a la comunidad P&P</h2>
              <p class="lead">Tenes ganas de brindar tus servicios, o conoces a alguien que quiera hacerlo? </p>
              <a class="btn btn-secondary" href="faq.php" role="button">Apreta aca</a>
            </div>
            <div class="col-md-5 order-md-1">
              <img src="img/manicura2.png" alt="m" class="img-fluid mx-auto" width="300" height="300">
            </div>
          </div>
        </div>
        <hr class="divider">
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
