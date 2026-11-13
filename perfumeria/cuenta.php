<?php
session_start();
// Si ya inició sesión, lo mandamos directo al inicio
if (isset($_SESSION['usuario_nombre'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta - Perfumeria Exclusive</title>
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
        <h2>Acceso a tu Cuenta</h2>
        <p style="color: var(--texto-suave);">Seleccione una opcion para continuar.</p>

        <div class="opciones-cuenta">
            <div class="opcion-cuenta">
                <h3>Ya soy cliente</h3>
                <p>Ingrese con su correo y contrasena.</p>
                <a href="login.php" class="btn">Iniciar Sesion</a>
            </div>
            <div class="opcion-cuenta">
                <h3>Soy nuevo</h3>
                <p>Cree su cuenta y forme parte de la casa.</p>
                <a href="registro.php" class="btn btn-ghost">Registrarse</a>
            </div>
        </div>

        <a href="index.php" class="volver">&larr; Volver al Inicio</a>
    </div>

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