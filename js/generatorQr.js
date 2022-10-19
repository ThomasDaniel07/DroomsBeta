$(buscarDatos());

const containerResult = document.querySelector('.contTable');

function buscarDatos (consulta) {
    $.ajax ({ 
        url : '../php/generatonQr.php',
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


const id = document.getElementById('id');
const name = document.getElementById('name')
const age = document.getElementById('age')
const grade = document.getElementById('grade')
const entity = document.getElementById('entity')
const formulario = document.getElementById('formularioG')
const btn = document.getElementById('btnG')
const contQr = document.getElementById('codigoQr')

btn.addEventListener('click', (e)=>{
    e.preventDefault();
        const DataQr = {
            'id':id.value,
            'name':name.value,
            'age':age.value,
            'grade':grade.value,
            'entity':entity.value,
            'state':'Almorzado'
        }
        if (contQr.innerHTML == '') {
            const Qr = new QRCode (contQr,{
                text: JSON.stringify(DataQr),
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.M
            })
        }

})