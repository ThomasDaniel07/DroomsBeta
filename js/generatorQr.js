const id = document.getElementById('id');
const name = document.getElementById('name')
const age = document.getElementById('age')
const grade = document.getElementById('grade')
const entity = document.getElementById('entity')
const formulario = document.getElementById('formularioG')
const btn = document.getElementById('btnG')
const contQr = document.getElementById('codigoQr')



btn.addEventListener('click', async(e)=>{
    e.preventDefault();
    if ((id.value) != '' && (name.value)!= '' & (age.value) != '' & (grade.value) != '' & (entity.value) != '') {
        const DataQr = {
            'id':id.value,
            'name':name.value,
            'age':age.value,
            'grade':grade.value,
            'entity':entity.value,
            'state':'Almorzado'
        }
        const DataBd = {
            'id':id.value,
            'name':name.value,
            'age':age.value,
            'grade':grade.value,
            'entity':entity.value,
            'state':'Sin Almorzar'
        }
        const Qr = new QRCode (contQr,{
            text: JSON.stringify(DataQr),
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.M
        });

        
    }else {
        alert('Favor llenar todo los campos')
    }
})