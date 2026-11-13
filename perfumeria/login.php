<?php
include("conexion.php");

$mensaje = "";
$mostrar_pregunta = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        if ($usuario['password'] == $password) {
            $saludo = ($usuario['genero'] == 'mujer') ? "bienvenida" : "bienvenido";
            $mensaje = "¡" . ucfirst($saludo) . " de nuevo, " . $usuario['nombre'] . "!";
        } else {
            $mensaje = "Contrasena incorrecta.";
        }
    } else {
        $mensaje = "Este usuario no existe. ¿Desea registrarse?";
        $mostrar_pregunta = true;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
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
        <h2>Iniciar Sesion</h2>
        <?php if ($mensaje != ""): ?>
            <div class="mensaje-box">
                <p><?php echo $mensaje; ?></p>
                <?php if ($mostrar_pregunta): ?>
                    <a href="registro.php" class="btn">Si</a>
                    <a href="index.php" class="btn btn-no">No</a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <form action="login.php" method="POST" class="formulario">
                <label>Correo Electronico:</label>
                <input type="email" name="correo" required>
                <label>Contrasena:</label>
                <input type="password" name="password" required>
                <button type="submit" class="btn">Ingresar</button>
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