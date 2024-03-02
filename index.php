<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi tienduca</title>
</head>
<body>
    <?php
        if(isset($_GET["redirigido"])){
            echo "<p>Introduzca sus credenciales: </p>";
        }
        
        if(isset($err) and $err == true) {
            echo "<p>Credenciales incorrectas</p>";
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <label for="usuario">Email</label>
        <input id="usuario" name="usuario" value="<?php if(isset($usuario)) echo $usuario;?>" type="text"
        <label for="contraseña">Contraseña</label>
        <input id="contraseña" name="contraseña" type="password">
        <input type="submit">
    </form>
        
    </form>
</body>
</html>