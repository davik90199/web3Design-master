<?php

include ("Base_de_Datos.php");

if(isset($_POST['Registrarse']))
{
    
    if(strlen($_POST['Nombre']) <= 1 && 
    strlen($_POST['Primer Apellido']) <= 1 && 
    strlen($_POST['Segundo Apellido']) <= 1 &&  
    strlen($_POST['Usuario']) <= 1 && 
    strlen($_POST['Contraseña']) <= 1 && 
    strlen($_POST['Clear']) <= 1){
        
        $Nombre= $_POST['Nombre'];
        $PrimerApellido= $_POST['Primer Apellido'];
        $SegundoApellido= $_POST['Segundo Apellido']; 
        $Usuario= $_POST['Usuario'];
        $Contraseña= $_POST['Contraseña'];
        $Consulta= "INSERT INTO `login`( `Nombre`, `PrimerApellido`, 
        `SegundoApellido`, `Usuario`, `Contraseña`) 
        VALUES ('$Nombre','$PrimerApellido',' $SegundoApellido','$Usuario','$Contraseña')";
        $resultados= mysqli_query($connection, $Consulta);

        if($resultados)
        {
            ?>
            <h2 class="aviso">Se a Registrado correctamente</h2>
            <?php
        }
        else{
            ?>
            <h2 class="aviso">No sea Registrado correctamente</h2>
            <?php
        }
    }
    else{
        ?>
        <h2 class="aviso">Por favor complete los campos</h2>
        <?php
    }
}

if(isset($_POST['Clear']))
{
    if(strlen($_POST['Nombre']) <= 1 && 
    strlen($_POST['Primer Apellido']) <= 1 && 
    strlen($_POST['Segundo Apellido']) <= 1 &&  
    strlen($_POST['Usuario']) <= 1)
    {
        $Nombre= "";
        $PrimerApellido= "";
        $SegundoApellido= ""; 
        $Usuario= "";
        $Contraseña= "";
    }
}

?>