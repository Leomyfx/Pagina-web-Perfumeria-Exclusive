<?php
session_start();
$nombre = isset($_SESSION['usuario_nombre']) ? $_SESSION['usuario_nombre'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria Exclusive | Alta Perfumeria</title>
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

    <?php if ($nombre): ?>
        <div class="saludo-usuario">Es un placer tenerle de vuelta, <?php echo htmlspecialchars($nombre); ?></div>
    <?php endif; ?>

    <main>
        <section class="hero">
            <div>
                <span class="eyebrow">Alta perfumeria &middot; Coleccion exclusiva</span>
                <h2>El arte de dejar <em>huella</em></h2>
                <p class="lead">Fragancias finas de las casas mas reconocidas del mundo, seleccionadas para cada ocasion y cada estilo. Descubra la que cuenta su historia.</p>
                <div class="hero-cta">
                    <a href="elegantes.html" class="btn">Explorar coleccion</a>
                    <a href="cuenta.php" class="btn btn-ghost">Mi cuenta</a>
                </div>
            </div>

            <div class="hero-arcos">
                <figure class="arco">
                    <img src="img/baccarat.jpg" alt="Baccarat Rouge 540">
                    <figcaption>Baccarat Rouge 540</figcaption>
                </figure>
                <figure class="arco">
                    <img src="img/Bleu de Chanel.jpg" alt="Bleu de Chanel">
                    <figcaption>Bleu de Chanel</figcaption>
                </figure>
                <figure class="arco">
                    <img src="img/creed.jpg" alt="Creed Aventus">
                    <figcaption>Creed Aventus</figcaption>
                </figure>
            </div>
        </section>

        <div class="marcas">
            <div class="marcas-pista">
                <span>Chanel</span><span>Dior</span><span>Yves Saint Laurent</span><span>Tom Ford</span><span>Creed</span><span>Givenchy</span><span>Maison Francis Kurkdjian</span><span>Roja Parfums</span>
                <span>Chanel</span><span>Dior</span><span>Yves Saint Laurent</span><span>Tom Ford</span><span>Creed</span><span>Givenchy</span><span>Maison Francis Kurkdjian</span><span>Roja Parfums</span>
            </div>
        </div>

        <section class="seccion">
            <div class="seccion-titulo">
                <span class="eyebrow">Nuestras colecciones</span>
                <h3>Una fragancia para cada momento</h3>
            </div>
            <div class="colecciones">
                <a href="elegantes.html" class="coleccion"><div class="num">I</div><h4>Elegantes</h4><p>Maderas nobles y especias para eventos formales y noches de gala.</p><span class="ver">Descubrir</span></a>
                <a href="nocturnos.html" class="coleccion"><div class="num">II</div><h4>Nocturnos</h4><p>Intensidad y misterio para cuando cae el sol.</p><span class="ver">Descubrir</span></a>
                <a href="arabes.html" class="coleccion"><div class="num">III</div><h4>Arabes</h4><p>Oud, ambar y resinas: la opulencia de oriente.</p><span class="ver">Descubrir</span></a>
                <a href="dia_a_dia.html" class="coleccion"><div class="num">IV</div><h4>Dia a dia</h4><p>Frescura versatil para acompanarle en cada jornada.</p><span class="ver">Descubrir</span></a>
                <a href="veraniegos.html" class="coleccion"><div class="num">V</div><h4>Veraniegos</h4><p>Citricos y notas marinas para los dias de sol.</p><span class="ver">Descubrir</span></a>
                <a href="invierno.html" class="coleccion"><div class="num">VI</div><h4>Invierno</h4><p>Calidez envolvente: vainilla, cuero y maderas ahumadas.</p><span class="ver">Descubrir</span></a>
            </div>
        </section>

        <section class="promesas">
            <div class="promesa"><b>100% Originales</b><span>Marcas y casas de renombre mundial</span></div>
            <div class="promesa"><b>Envio asegurado</b><span>A toda la Republica Mexicana</span></div>
            <div class="promesa"><b>Pago seguro</b><span>Compra con tranquilidad</span></div>
            <div class="promesa"><b>Atencion exclusiva</b><span>Asesoria personalizada</span></div>
        </section>
        <div style="height:80px"></div>
    </main>

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