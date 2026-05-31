<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Acerca de - Datos del Estudiante</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo"><a href="index.php">phpStem</a></h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="acercade.php" class="current">Acerca de</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="contenedor" style="grid-template-areas: 'a1 a1 a1 a1' 'a4 a4 a5 a5';">
        <section class="calculos" style="grid-area: a4; padding: 25px; line-height: 1.6em; text-align: left;">
            <h2>Información de la Práctica</h2>
            <p><strong>Materia:</strong> Programación Web</p>
            <p><strong>Nombre del Proyecto:</strong> phpStem</p>
            <p><strong>Nombre del Estudiante:</strong> Citlalli Carolina Carpintero Ortiz</p>
            <p><strong>Número de Control:</strong> 23090910</p>
            <p><strong>Grupo:</strong> XB</p>
        </section>
        
        <section class="resultado" style="grid-area: a5; text-align: center; padding: 20px;">
            <h2>Estudiante</h2>
            <img src="images/foto.jpg" alt="Foto Estudiante" style="width: 80%; max-width: 220px; border-radius: 10px; border: 3px solid white; margin-top: 10px;">
        </section>
    </section>
    
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2026
    </footer>
</section>
</body>
</html>
