<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Práctica 12 - Gpo XB</title>
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
                <li><a href="index.php" class="current">Inicio</a></li>
                <li><a href="acercade.php">Acerca de</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular la densidad de la Tierra</h2>
            <p><strong>Descripción:</strong></p>
            <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br><br>
            <strong>a)</strong> ¿Cuál es la densidad promedio de la Tierra?<br>
            <strong>b)</strong> Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiara, ¿cuál sería su densidad?<br>
            <strong>c)</strong> Si el radio de la Tierra y su masa se redujeran a una tercera parte, ¿su densidad sería la misma? ¿por qué?</p>
        </section>
        
        <section class="formulas">
            <h2>Fórmulas</h2>
            <p>Volumen = (4/3) * pi * r³</p>
            <p>Densidad = Masa / Volumen</p>
        </section>
        
        <section class="datos">
            <h2>Datos:</h2>
            <p>Masa (m) = 5.97E24 Kg.</p>
            <p>Radio (r) = 6378 Km = 6,378,000 m.</p>
        </section>
        
        <section class="calculos">
            <h2>Solución</h2>
            <p><strong>a)</strong> Volumen Base = (4/3) * pi * (6,378,000)³</p>
            <p><strong>b)</strong> Nuevo Radio = Radio / 3</p>
            <p><strong>c)</strong> Nueva Masa = Masa / 3, Nuevo Radio = Radio / 3</p>
        </section>

        <?php
        function calcula_densidades(){
            $PI = 3.1415926535898;
            $masa_original = 5.97e24;
            $radio_original = 6378000; 
            
            // Inciso A
            $volumen_a = (4/3) * $PI * pow($radio_original, 3);
            $densidad_a = $masa_original / $volumen_a;
            
            // Inciso B
            $radio_b = $radio_original / 3;
            $volumen_b = (4/3) * $PI * pow($radio_b, 3);
            $densidad_b = $masa_original / $volumen_b;
            
            // Inciso C
            $masa_c = $masa_original / 3;
            $radio_c = $radio_original / 3;
            $volumen_c = (4/3) * $PI * pow($radio_c, 3);
            $densidad_c = $masa_c / $volumen_c;
            
            return array($densidad_a, $densidad_b, $densidad_c);
        }
        
        $resultados = calcula_densidades();
        ?>
        
        <section class="resultado">
            <h2>Resultado:</h2>
            <div style="padding: 10px; font-size: 0.9em; text-align: left; line-height: 1.4em;">
                <p><strong>a) Densidad Promedio:</strong><br> <?php print number_format($resultados[0], 2); ?> kg/m³</p>
                <p><strong>b) Radio reducido a 1/3:</strong><br> <?php print number_format($resultados[1], 2); ?> kg/m³</p>
                <p><strong>c) Masa y Radio a 1/3:</strong><br> <?php print number_format($resultados[2], 2); ?> kg/m³</p>
            </div>
        </section>
    </section>
    
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2026
    </footer>
</section>
</body>
</html>
