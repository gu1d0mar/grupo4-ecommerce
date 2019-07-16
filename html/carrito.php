<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/d0267cb93b.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Carrito</title>
</head>
  <body>
    <div class="container-fluid">
      <!--Header-->
      <?php require_once("../includes/header.php") ?>
      <!-- Header -->
      <div class="container">
        <div class="row">
          <div class="w-100">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html#listado">Listado</a></li>
                <li class="breadcrumb-item"><a href="productos.html">Peluqueria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- Carrito -->
        <div class="row">
          <div class="col-md-8 offset-md-2 mb-2">
            <h4 class="d-flex justify-content-between align-items-center mb-3 mw-500">
              <span class="text-muted">Carrito</span>
              <span class="badge badge-secondary badge-pill">2</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Producto</h6>
                  <small class="text-muted">Pequeña descripcion del producto</small>
                </div>
                <span class="text-muted">$300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Producto</h6>
                  <small class="text-muted">Pequeña descripcion del producto</small>
                </div>
                <span class="text-muted">$300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Codigo de descuento</h6>
                  <small>Codigo de ejemplo</small>
                </div>
                <span class="text-success">-$200</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>$400</strong>
              </li>
            </ul>
            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Codigo de descuento">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">Ingresar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php require_once("../includes/footer.php") ?>
    </div>
  </body>
</html>
