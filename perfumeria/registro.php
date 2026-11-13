<?php
include("conexion.php");

$mensaje = "";
$mostrar_pregunta = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $genero = $_POST['genero'];

    $sql_check = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $res_check = $conexion->query($sql_check);

    if ($res_check->num_rows > 0) {
        $mensaje = "Este usuario ya cuenta con una cuenta. ¿Desea iniciar sesion?";
        $mostrar_pregunta = true;
    } else {
        $sql_insert = "INSERT INTO usuarios (nombre, correo, password, genero) VALUES ('$nombre', '$correo', '$password', '$genero')";
        if ($conexion->query($sql_insert) === TRUE) {
            $saludo = ($genero == 'mujer') ? "bienvenida" : "bienvenido";
            $mensaje = "¡" . ucfirst($saludo) . " a Perfumeria Exclusive, " . $nombre . "! Gracias por su preferencia.";
        } else {
            $mensaje = "Error al registrar: " . $conexion->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Perfumeria Exclusive</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="cuenta.php">Cuenta</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Perfumes &#9662;</a>
                <div class="dropdown-content">
                    <a href="elegantes.html">Elegantes</a>
                    <a href="nocturnos.html">Nocturnos</a>
                    <a href="arabes.html">Arabes</a>
                    <a href="dia_a_dia.html">Dia a dia</a>
                    <a href="veraniegos.html">Veraniegos</a>
                    <a href="invierno.html">Invierno</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="contenedor">
        <h2>Registro de Cliente</h2>
        <?php if ($mensaje != ""): ?>
            <div class="mensaje-box">
                <p><?php echo $mensaje; ?></p>
                <?php if ($mostrar_pregunta): ?>
                    <a href="login.php" class="btn">Si</a>
                    <a href="index.php" class="btn btn-no">No</a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <form action="registro.php" method="POST" class="formulario">
                <label>Nombre Completo:</label>
                <input type="text" name="nombre" required>
                
                <label>Correo Electronico:</label>
                <input type="email" name="correo" required>
                
                <label>Contrasena:</label>
                <input type="password" name="password" required>
                
                <label>Genero:</label>
                <select name="genero" required>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                </select>
                
                <button type="submit" class="btn">Crear Cuenta</button>
            </form>
        <?php endif; ?>
    </div>
</body>
<footer>
        <div class="footer-contenido">
            <h3>Proyecto Perfumeria Web</h3>
            <div class="footer-info">
                <span>Alumno: <strong>MATA PEREEZ YOSEF LEONARDO</strong></span>
                <span>Matricula: <strong>23308051280278</strong></span>
                <span>Materia: <strong>Construye Aplicaciones Web</strong></span>
            </div>
        </div>
    </footer>
</body>
</html>
</html>