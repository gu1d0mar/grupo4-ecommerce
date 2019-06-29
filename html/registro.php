<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\registro.css">
    <title>Registrate en Fernandez-Fernandez Coiffeur</title>
</head>
<body>
<form action="action_page.php">
  <div class="container">
    <h1>Creá tu cuenta</h1>
    <p>Completá tus datos</p>
    <hr>

    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Clave</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repita Clave</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <p>Al registrarme, declaro que soy mayor de edad y acepto los <a href="#">Términos y condiciones</a> de Fernandez-Fernandez Coiffure.</p>
    <button type="submit" class="registerbtn">Crear cuenta</button>
  </div>

  <div class="container signin">
    <p>Ya tienes cuenta? <a href="#">Ingresa aquí</a>.</p>
  </div>
</form>
</body>
</html>

  