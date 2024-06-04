<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/codigo.js"></script>
    <link rel="stylesheet" href="stem.css">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Cálcular la densidad de la Tierra</h2>
        <p>Descripción:</p>
        <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
        </p>
      </section>
      <section  class="esquemaProblema">
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
        <p>a)La densidad de la Tierra es:<br>
        densidad = 5.97E24 Kg/volumen (metros cúbicos) <br>
        volumen= (4/3)*pi*(6378000)*(6378000)*(6378000) metros cúbicos</p>
        <button onclick="calcula_densidad()">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <script src="codigo.js"></script>
        
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
