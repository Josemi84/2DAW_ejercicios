
function cambio() {

    console.log("Selección cambiada");

    //Realizamos para cada índice del select la captura de sus valores 
    // y le asociamos a cada uno el valor "lat" y "lon" para 
    //las siguientes llamadas a la web con los datos de cada pais/ciudad

    var select = document.getElementById('ciudades');
    var selectedOption = this.options[select.selectedIndex];

    switch (selectedOption.value) {
        case "Londres":
            lat = 51.5085;
            lon = -0.1257;
        break;

        case "Madrid":
            lat = 40.4165;
            lon = -3.7026;
        break;

        case "Argentina":
            lat = -34;
            lon = -64;
        break;

        case "Japon":
            lat = 35.6854;
            lon = 139.7531;
        break;

        case "Sydney":
            lat = -33.8679;
            lon = 151.2073;
        break;

    }

    //Ahora ya formamos la url del pais/ciudad que hemos seleccionado 
    //en el select para acceder a sus datos metereológicos de la web

    var url = 'http://api.openweathermap.org/data/2.5/weather?lat=' + lat + '&lon=' + lon + '&APPID=428ff28a33ae29d6a08b5695c1bc6ebd';
    console.log(url);

    var req = new XMLHttpRequest();
    req.open('GET', url, true); //Llamada a la web de tiempos


    //Hacemos una pequeña comprobación fuera de la función de creación html para 
    //que elimine el contenido si ya hemos mostrado el contenido de alguna selección

    var divDatos = document.getElementById("datos");

    if (divDatos.innerText) {
        document.getElementById("datos").innerHTML = '';
    }

    //En la función de la respuesta mostraremos una serie de string atrapando
    // los datos que queremos del array respuesta que obtenemos de la consulta

    function respuestaHTTP(aEvt) {
        if (req.readyState == 4) {
            if (req.status == 200) {

                var arrayRespuesta = JSON.parse(req.responseText);
                console.log(arrayRespuesta);

                var t = arrayRespuesta["main"]["temp"];
                var t2 = (parseInt(t)) - 273.15;
                var t2 = t2.toFixed(0);

                var d1 = 'Temperatura :  ' + t2 + ' ºC';

                var d2 = 'Viento : ' + arrayRespuesta["wind"]["speed"] + ' m/s';

                var d3 = 'Humedad :  ' + arrayRespuesta["main"]["humidity"] + ' %';

                var d4 = 'Cielo :  ' + arrayRespuesta["weather"][0]["description"];

                var d5 = 'Presión atmosférica :  ' + arrayRespuesta["main"]["pressure"] + ' hPa';

                var arrayM = [d1, d2, d3, d4, d5]; //Introducimos los datos en un array


                //Recorremos el array incluyendo cada dato en un h2 dentro del div vacio del html

                for (var i = 0; i < arrayM.length; i++) {

                    var divDatos = document.getElementById("datos");
                    var nuevoH = document.createElement("h2");


                    var nuevoDato = document.createTextNode(arrayM[i]);
                    var br = document.createElement("br");


                    nuevoH.appendChild(nuevoDato);
                    nuevoH.appendChild(br)
                    divDatos.appendChild(nuevoH);

                }
                
            } else {
                console.log("Error");
            }
        }
    }

    req.onreadystatechange = respuestaHTTP;
    req.send(null);
}



//Función de carga de página y creación
// del listener para cada cambio del select

function load() {
    console.log("Página Cargada");

    var select = document.getElementById('ciudades');
    select.addEventListener("change", cambio, false);
}


window.onload = load;
