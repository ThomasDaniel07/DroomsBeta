const btnActiveCamera = document.getElementById('btnActiveCamera')

    const video = document.getElementById('video')
    
    const btnCloseCamera = document.getElementById('btnCloseCamera')

    btnActiveCamera.addEventListener('click',()=>{

        btnActiveCamera.style.display = 'none'

        video.style.display = 'block'
        video.style.padding = '20px'

        btnCloseCamera.style.display = 'block'

        let scanner =  new Instascan.Scanner({video : video});

        Instascan.Camera.getCameras().then(function(cameras){

            if (cameras.length > 0){

                scanner.start(cameras[0])

            }else {

                alert('No cameras found');

            }

        }).catch(function(e){

            console.error(e);

        });

        scanner.addListener('scan',(data)=>{

            const DataQr = JSON.parse(data);
            

            const DataSend = {
                'id': DataQr.id,
                'name': DataQr.name,
                'age':DataQr.age,
                'grade':DataQr.grade,
                'entity':DataQr.entity,
                'state':DataQr.state
            }

            
            fetch('../php/updateQr.php',{
                method:'POST',
                body : JSON.stringify(DataSend),
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                }
            }).then(response => response.text().then(response => {
                const result = JSON.parse(response)
                if (result.STATUS == true) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: result.MESSAGE,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                if (result.STATUS == false) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: result.MESSAGE,
                      })
                }
            }))

            

        })
    })
    btnCloseCamera.addEventListener('click',()=>{
        location.reload()
    })