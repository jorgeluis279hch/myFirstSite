<?php

$user = $_POST['username'];
$mail = $_POST['gmail'];
$passwd = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
$conex = mysqli_connect("localhost", "root", "", "usuarios") or die("Error de conexión");
mysqli_query($conex, "INSERT INTO usuariosdata(username, mail, passw) 
VALUES ('$user', '$mail','$passwd')") or die("ERR".mysqli_error($conex));
mysqli_close($conex);
echo "Usuario registrado<br>";
echo "<a href=\"logIn.html\">Ingresar</a>";

?>
