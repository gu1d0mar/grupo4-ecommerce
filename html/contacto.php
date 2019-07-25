<?php $tittle = "Contacto" ?>
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
      <div class="text-center mt-2">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center">
          <h1>Contacto</h1>
          <h3 class="h3 mb-3 font-weight-normal">Dejanos tu mensaje</h3>
          <div class="form-signin">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu nombre..." required>
          </div>
          <div class="form-signin">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu apellido..." required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">País</label>
            <select id="inputState" class="form-control">
              <option selected>Elige tu país...</option>
              <option>...</option>
              <option value="argentina">Argentina</option>
              <option value="chile">Chile</option>
              <option value="uruguay">Uruguay</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Comentarios</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deja tu comentario..." required>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Al enviar este mensaje acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block" formaction="index.php">Enviar</button>
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
