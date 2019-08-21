<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "root";
 $db_name = "Peluquin";
 $tbl_name = "Users";
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE email = '$_POST[email]' ";

 $result = $conexion->query($buscarUsuario);

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

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='../login.php'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>
