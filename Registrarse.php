<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="Registrarse.css">
    
</head>
<body>
    <DIv class="contenedor">
        <div class="circulo">
            <img class="Logo"src="logo_dorado.png" alt="logo">
        </div>
        
       <h1 class="cuenta">!Create una cuenta¡</h1>
        <form action="Registrar.php"method="POST" class="formulario2">
            <!--IdeUsuario-->
            <label for="Username">Id_usuario</label>
            <input type="text" name="Id_usuario" placeholder="Ingrese su Id" required>

            <!--Nombre-->
            <label for="Username">Nombre</label>
            <input type="text" name="Nombre" placeholder="Ingrese su nombre" required>

            <!--Primer Apellido-->
            <label for="Username">Primer Apellido</label>
            <input type="text" name="PrimerApellido" placeholder="Ingrese su Apellido"required>

            <!--Segundo Apellido-->
            <label for="Username">Segundo Apellido</label>
            <input type="text" name="SegundoApellido" placeholder="Ingrese su Apellido">

            <!--Username-->
            <label for="Username">Usuario</label>
            <input type="text" name="Usuario" placeholder="Ingrese usuario" required>

             <!--Password-->
             <label for="Username">Contraseña</label>
             <input type="text" name="Contraseña" placeholder="Ingrese contraseña" required>

             <button class="boton" type="submit" name="Registrarse">Registrarse</button>
             <button class="boton" type="submit" name="Limpiar">Limpiar</button>
            <br>
            <br>
             <a href="Login.html">Atras</a>
        </form>
       
    </DIv>
</body>
</html>