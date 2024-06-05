<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
     <link rel="stylesheet" href="stem.css">
    <script src="js/codigo.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Densidad de urano</h2>
        <p>Descripción:</p>
        <p> Determina la densidad de urano si su masa es 14 veces la de la tierra y su radio es 4 veces el de la tierra, siendo la masa de la tierra de 5.97 y su radio de 6378km <br></p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
          <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Densidad = Masa/Volumen<br>
        Volumen=(4/3)pi*r*r*r
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        m= 5.97E24 Kg. <br>
        r= 6378 Km.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a) La densidad de Urano es:<br>
        densidad = 5.97E24 Kg/volumen (metros cúbicos) <br>
        volumen= (4/3)*pi*(6378000)*(6378000)*(6378000) metros cúbicos</p>
        <form method="post">
          <button type="submit" name="calcula_densidad">Presiona para calcular</button>
        </form>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcula_densidad'])) {
              // Definición de constantes
              $masa_tierra = 5.97E24; // masa de la Tierra en kg
              $radio_tierra = 6378 * 1000; // radio de la Tierra en metros
              
              // Masa y radio de Urano
              $masa_urano = 14 * $masa_tierra;
              $radio_urano = 4 * $radio_tierra;
              
              // Cálculo del volumen de Urano
              $volumen_urano = (4/3) * pi() * pow($radio_urano, 3);
              
              // Cálculo de la densidad de Urano
              $densidad_urano = $masa_urano / $volumen_urano;
              
              // Mostrar el resultado
              echo "<div id='resultadoA'>La densidad de Urano es: " . $densidad_urano . " kg/m<sup>3</sup></div>";
          }
        ?>
      </section>
    </section>
    <footer class="pie">
      Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
