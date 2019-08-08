<?php
$tittle = "Registrarse";
// define variables and set to empty values
$userErr = $termsErr = $passwordErr = $cpasswordErr = "";
$user = $terms = $password = $cpassword = $userOk = $termsOk = $passwordOk = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["user"])) {
    $userErr = "<b>* Debe ingresar un correo electronico</b>";
  } else {
    $user = test_input($_POST["user"]);
    // check if e-mail address is well-formed
    if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
      $userErr = "<b>* Formato de correo invalido</b>";
    } else {
      $userOk = TRUE;
    }
  }

  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
    $password = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);
    if (strlen($_POST["password"]) < 8) {
        $passwordErr = "<b>* Su contraseña debe contener al menos 8 caracteres!</b>";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "<b>* Su contraseña debe contener al menos 1 numero!</b>";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "<b>* Su contraseña debe contener al menos 1 letra mayuscula!</b>";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "<b>* Su contraseña debe contener al menos 1 letra minuscula!</b>";
    } else {
      $passwordOk = TRUE;
    }
  }

  elseif(!empty($_POST["password"])) {
    $cpasswordErr = "<b>* Por favor revise que ingreso o verifico su contraseña!</b>";
  } else {
     $passwordErr = "<b>* Por favor ingrese contraseña!</b>";
  }

  if (empty($_POST["terms"])) {
    $termsErr = "<b>* Debe aceptar los terminos y condiciones!</b>";
  } else {
    $terms = test_input($_POST["terms"]);
    $termsOk = TRUE;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($userOk == TRUE) {
  if ($passwordOk == TRUE) {
    if ($termsOk == TRUE) {
      header('Location:login.php');
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Head -->
  <?php require_once("includes/head.php") ?>
  <!-- Head -->
  <body>
    <!--Header-->
    <?php require_once("includes/header.php") ?>
    <!-- Header -->
    <div class="container-fluid">
      <div class="text-center mt-2">
        <form class="col col-md-6 col-xl-4 m-auto bg-white border rounded p-3 text-center" method="post">
          <h1>Creá tu cuenta</h1>
          <h3 class="h3 mb-3 font-weight-normal">Ingresa tus datos</h3>
          <div class="form-signin">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese nombre de usuario..." value="<?php echo $user;?>">
            <span class="error"> <?php echo $userErr;?></span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contrasena</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese contrasena..."  value="<?php echo $password;?>">
            <span class="error"> <?php echo $passwordErr;?></span>
            <label for="exampleInputPassword2">Repita Contrasena</label>
            <input type="password" name ="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Repita contrasena..."  value="<?php echo $cpassword;?>">
            <span class="error"> <?php echo $cpasswordErr;?></span>
          </div>
          <div class="form-check">
            <input type="checkbox"  name="terms" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"> Acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
            <span class="error"> <?php echo $termsErr;?></span>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Registrame</button>
          <small id="emailHelp" class="form-text text-muted">Ya tienes cuenta? <a href="login.php">Ingresa aqui</a>.</small>
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
