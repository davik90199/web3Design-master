<link rel="stylesheet" href="Registrarse.css">
<?php

$Usuario= $_POST['Usuario'];
$Contraseña= $_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$Usuario;

$connection = mysqli_connect($host, $user, $pass, $bddatos);
$Consulta="SELECT*FROM usuario='$Usuario' and contraseña='$Contraseña'";

$resultados= mysqli_query($connection, $Consulta);
$filas= mysqli_num_rows($resultados);

if($filas){
    header("location:index.html");
}else{
    ?>
    <?php
    include("login.html");
    ?>
    <h1 class="aviso"> ERROR EN LA AUTENTICACIÓN</h1>
    <?php
}
?>
 <a class="links" href="Login.html">Atras</a>
<?php
mysqli_free_result($resultados);
mysqli_close($connection);