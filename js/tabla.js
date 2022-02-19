//Definimos un array bidimensional para adjudicar las filas y columnas de la tabla
var busquedas = new Array(4);

busquedas[0] = ["[Pais, Ranking]", 0, 1, 2, 3, 4];
busquedas[1] = ["0 (España)", "Facebook", "Tuenti", "YouTube", "Hotmail", "Marca"];
busquedas[2] = ["1 (Suiza)", "Facebook", "YouTube", "Hotmail", "Google", "Blick"];
busquedas[3] = ["2 (Portugal)", "Facebook", "YouTube", "Hotmail", "Jogos", "Download"];


//Creamos la función generarTabla() para recorrer el array 
//Y generar las etiquetas de la tabla en el documento html con los valores de las celdas

function generarTabla() {
    document.write("<table>");

    for (var i = 0; i < busquedas.length; i++) {

        document.write("<tr>");
        for (var j = 0; j < busquedas[3].length; j++) {
            document.write("<td>" + busquedas[i][j] + "</td>");
        }
        document.write("</tr>");
    }

    document.write("</table>");
}

generarTabla();