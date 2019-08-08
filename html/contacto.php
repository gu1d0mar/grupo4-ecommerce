<?php

$tittle = "Contacto"

// define variables and set to empty values
$firstnameErr = $lastnameErr = $termsErr = $countryErr = "";
$firstname = $lastname = $country = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Debe ingresar su nombre";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Solo se permiten letras y espacios";
    }
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "Debe ingresar su apellido";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Solo se permiten letras y espacios";
    }
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Debe dejar un comentario";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = "Debe elegir un pais";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["terms"])) {
    $termsErr = "Debe aceptar los terminos y condiciones";
  } else {
    $terms = test_input($_POST["terms"]);
  }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


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
      <div class="text-center mt-2">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>Contacto</h1>
          <h3 class="h3 mb-3 font-weight-normal">Dejanos tu mensaje</h3>
          <div class="form-signin">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu nombre..."  name="firstname" value="<?php echo $firstname;?>">
            <span class="error"> <?php echo $firstnameErr;?></span>
            <br>
          </div>
          <div class="form-signin">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu apellido..."  name="lastname" value="<?php echo $lastname;?>">
            <span class="error"> <?php echo $lastnameErr;?></span>
            <br>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">País</label>
            <select id="inputState" class="form-control">
              <option selected>Elige tu país...</option>
              <option value="argentina">Argentina</option>
              <option value="chile">Chile</option>
              <option value="uruguay">Uruguay</option>
            </select>
            <span class="error"> <?php echo $countryErr;?></span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Comentarios</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deja tu comentario..." name="comment" rows="5" cols="40"  style="height:100px;" value="<?php echo $comment;?>">
            <span class="error"> <?php echo $commentErr;?></span>
            <br>
          </div>
          <div class="form-check">
            <input type="checkbox" name="terms" class="form-check-input" id="exampleCheck1" >
            <label class="form-check-label" for="exampleCheck1">Al enviar este mensaje acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
            <span class="error"> <?php echo $termsErr;?></span>
            <br>
          </div>
          <br>
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
