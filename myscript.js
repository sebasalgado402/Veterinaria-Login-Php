let formulario = document.getElementById('formEnviar');
let error = document.getElementById('msgError').style.display = 'none';
 
    formulario.addEventListener('submit',function(e){
        
 
        
    }); 

    $('button').submit(function(e){
        e.preventDefault()
        let datosForm = new FormData(formulario);
        let nombreRecibido = datosForm.get('txtUser');
        let passwdRecibida = datosForm.get('txtPasswd');
        validarCampos();

    function validarCampos() {
        if (nombreRecibido == '' || passwdRecibida == '') {
            error = document.getElementById('msgError').style.display = 'block';
            setTimeout(() => {
                error = document.getElementById('msgError').style.display = 'none';
            }, 3000);
            console.log(error)
    
        } else {
            formulario.method = 'POST';
            formulario.action = 'http://localhost/ejercicio/Veterinaria/comparar.php'
            formulario.submit();
            }
        }
    });

    

    


