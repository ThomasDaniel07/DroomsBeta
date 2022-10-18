$(buscarDatos());

const containerResult = document.querySelector('.contTable');

function buscarDatos (consulta) {
    $.ajax ({ 
        url : '../php/search.php',
        type: 'POST',
        dataType : 'html',
        data : {consulta : consulta},
    })
    .done(function(respuesta) {
        containerResult.innerHTML = respuesta;
    })
    .fail(function (){
        containerResult.innerHTML = respuesta;
    })
}


$(document).on('keyup','#cajaSearch', function(){
    let valor = $(this).val();
    if (valor != "") {
        buscarDatos(valor);
    }else {
        buscarDatos();
    }
})