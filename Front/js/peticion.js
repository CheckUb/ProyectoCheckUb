$(obtener_registros());//llamada a la función por jquery

function obtener_registros(texto) {
    $.ajax({
        type: 'POST',//metodo de envio de datos
        url: "recursos/funciones/listadoUsuariosFx.php",//aqui realizamos la petición
        //datos a procesar, primero el nombre que le daremos y 
        //despues de los : el valor que tiene, en este caso el recibido por la función
        data: {texto:texto},
        dataType: 'html',//tipo de archivo con el que nos comunicaremos (forma en que recibiremos los datos)
        })

        //si nuestra función se cumple
    .done(function (resultado) {//respuesta recibida desde el servidor
        $('#tabla_resultado').html(resultado);
    })
}

$(document).on('keyup','#caja_busqueda',function () {//al soltar una tecla
    var valorBusqueda = $(this).val();//rescatamos el texto del input
    
    if (valorBusqueda != "") {
        obtener_registros(valorBusqueda);

    }else{
        obtener_registros();
    }
});
