<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$Nombre = $_POST["nombre"] ;
$Apellido_1 = $_POST["Apellido_1"] ;
$Apellido_2 = $_POST["Apellido_2"] ;
$Usuario = $_POST["Usuario"] ;
$Contraseña = $_POST["Contraseña"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "3desing";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO login (Nombre, Apellido_1, Apellido_2, Usuario, Contraseña)
                             VALUES ('$Nombre','$Apellido_1','$Apellido_2','$Usuario','$Contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';
   
?>
