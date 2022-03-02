//Sabemos que la clase de las cabeceras es (class="c_t ")

function load() {
    console.log("Pagina Cargada"); //Comprobación

    //Atrapamos las cabeceras que contengan la clase seleccionada
    var cabeceras = document.getElementsByClassName('c_t ');
    console.log(cabeceras.length);

    //Recorremos cada elemento y atrapamos el texto de estos, en sí los titulares

    for (var i = 0; i < cabeceras.length; i++) {
        var Texto = cabeceras[i].textContent;
        alert(Texto);                           //Los mostramos como alertas
    }
}

//Función de ejecución al cargar la página
window.onload = load;

