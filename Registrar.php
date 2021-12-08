<link rel="stylesheet" href="Registrarse.css">
<?php

//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";
$bddatos = "3desing";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass, $bddatos)
or die ("error al conectar con la base de datos");

$Id_usuario= $_POST['Id_usuario'];
$Nombre= $_POST['Nombre'];
$PrimerApellido= $_POST['PrimerApellido'];
$SegundoApellido= $_POST['SegundoApellido']; 
$Usuario= $_POST['Usuario'];
$Contraseña= $_POST['Contraseña'];
$Consulta= "INSERT INTO  `login` VALUES ('$Id_usuario', '$Nombre','$PrimerApellido','$SegundoApellido','$Usuario','$Contraseña')";

$resultados= mysqli_query($connection, $Consulta)
or die ("error al conectar con la tabla");

mysqli_close($connection);

?>
<div class="contenedor1"> 

<form action="login.html" method="post" class="formulario3">
<h1 class="aviso">Los datos se registraron correctamente</h1>

<button class="boton" type="submit" name="Atras">Atras</button>
</form>

</div>
<?php

?>