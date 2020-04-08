<?php

$usr = $_POST['user'];
$pass = $_POST['pass'];

$conec = mysqli_connect("localhost", "root", "", "usuarios") or die("Error al conectar");
$qr = mysqli_query($conec, "SELECT username, passw FROM usuariosdata 
                            WHERE username='$usr'") or die("Error".mysqli_error($conec));

$registe = mysqli_fetch_array($qr);
if (password_verify($pass, $registe['passw'])){
    echo "contraseña correcta";

} else {
    echo "contraseña incorrecta<br>";
    echo "<a href=\"logIn.html\">Volver a intentar</a><br>";
    echo "<a href=\"index.html\">Inicio</a>";
}
mysqli_close($conec);
// foreach ($registe as $key => $value) {
//     echo $key.$value;
// }

?>