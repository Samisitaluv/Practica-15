function calcula_densidad() {

    var masa = 5.97E24;
    var radio = 6378e3;
    var volumen = (4 / 3) * Math.PI * radio * radio * radio;
    var densidad = masa / volumen;
    var resultado = document.getElementById("resultadoA");
    resultado.innerHTML = densidad.toFixed(2) + ' kg/(metro cúbico)';
}
