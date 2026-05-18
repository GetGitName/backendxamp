function mostrarCanasta() {
    console.log("entro a mostrarCanasta");
    if(document.oferta.botonDeCanasta.checked) {
        document.getElementById("canasta").style.visibility = "visible";
        document.getElementById("renglones").style.visibility = "visible";
        console.log("entro a checked");
    } else {
        document.getElementById("canasta").style.visibility = "hidden";
        document.getElementById("renglones").style.visibility = "hidden";
        console.log("entro a unchecked");
    }
    
    renglones=
        "<table>"+
            "<tr>"+
                "<th width='120'>Titulo</th>"+
                "<th>Artista</th>"+
                "<th>Genero</th>"+
                "<th>Precio</th>"+
                "<th>Cantidad</th>"+
                "<th>Eliminar</th>"+
            "</tr>";
    
    renglon = "";
    iteracion = document.getElementById("iteracion").value;
    for(x=0; x<iteracion; x++) {
        if(document.getElementById("cantidad["+x+"]").value == 0)
            continue;
        renglon = "<tr>";
        titulo = document.getElementById("titulo["+x+"]").value;
        artista = document.getElementById("artista["+x+"]").value;
        genero = document.getElementById("genero["+x+"]").value;
        precio = document.getElementById("precio["+x+"]").value;
        cantidad = document.getElementById("cantidad["+x+"]").value;
        renglon += "<td width='120'>"+titulo+"</td>";
        renglon += "<td>"+artista+"</td>";
        renglon += "<td>"+genero+"</td>";
        renglon += "<td>"+precio+"</td>";
        renglon += "<td>"+cantidad+"</td>";
        renglon += "<td onclick='eliminarRenglon("+x+")'>&#10008;</td>";
        renglon += "</tr>";
        renglones += renglon;
    }
    renglones += "</table>";
    document.getElementById("renglones").innerHTML = renglones;
}

function eliminarRenglon(indice) {
    eliminar = confirm("¿Desea eliminar este "+titulo+" de la canasta?");
    if(eliminar){
        document.getElementById("cantidad["+indice+"]").value = 0;
        mostrarCanasta();
    }
}