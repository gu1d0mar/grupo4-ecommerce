<?php

require_once('../database/pdo.php')

 $db = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($db->connect_error) {
 die("La conexion falló: " . $db->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE email = '$_POST[email]' ";

 $result = $db->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $form_pass = $_POST['password'];

 $hash = password_hash($form_pass, PASSWORD_BCRYPT);

 $query = "INSERT INTO Users (email, password)
           VALUES ('$_POST[email]', '$hash')";

 if ($db->query($query) === TRUE) {

 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='../login.php'>Login</a>" . "</h5>";
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $db->error;
   }
 }
 mysqli_close($db);
?>
