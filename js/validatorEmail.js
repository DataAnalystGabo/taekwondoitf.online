const inputEmail         = document.getElementById("form__input");
const circleConfirmation = document.getElementById("form__i");
const buttonSubmit       = document.getElementById("submit");
const notification       = document.getElementById("notification");
const expresiones        = { email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, }


const validarEmail = (e) => {
    e.preventDefault();

    if(expresiones.email.test(e.target.value)){

        inputEmail.classList.add("form__input--check");
        circleConfirmation.classList.remove("fa-circle-xmark");
        circleConfirmation.classList.add("fa-circle-check");
        circleConfirmation.classList.add("form__i--check");
        notification.classList.remove("notification--active");
    }
    
    else if(e.target.value == ""){
        inputEmail.classList.remove("form__input--check");
        inputEmail.classList.remove("form__input--error");
        circleConfirmation.classList.remove("form__i--check");
        circleConfirmation.classList.remove("form__i--error");
        circleConfirmation.classList.add("form__i");
        notification.classList.remove("notification--active");
    }
    
    else{
        inputEmail.classList.remove("form__input--check");
        inputEmail.classList.add("form__input--error");
        circleConfirmation.classList.add("fa-circle-xmark");
        circleConfirmation.classList.remove("fa-circle-check");
        circleConfirmation.classList.remove("form__i--check");
        circleConfirmation.classList.add("form__i--error");
        notification.classList.add("notification--active");

    }
}

inputEmail.addEventListener("blur", validarEmail);
inputEmail.addEventListener("keyup", validarEmail);



$(document).ready(function(){
    $('#submit').click(function(e){

        e.preventDefault();

        const email = $('#form__input').val();
        const data = 'email='+email;
        
        if(email == ''){

            $('#alert').html('El campo está vacío');

            inputEmail.classList.remove("form__input--check");
            inputEmail.classList.add("form__input--error");
            circleConfirmation.classList.add("fa-circle-xmark");
            circleConfirmation.classList.remove("fa-circle-check");
            circleConfirmation.classList.remove("form__i--check");
            circleConfirmation.classList.add("form__i--error");
            notification.classList.add("notification--active");

            setTimeout(()=>{
                $('#alert').html('');
            }, 3000);

        }if (expresiones.email.test(email)) {

            $.ajax({
                type    : 'POST',
                url     : './php/suscribe.php',
                data    : data,
                success : function(r){
                    if(r==1){
    
                        $('#confirmation').html('Enviado con exito');
                        $('#form__input').val('');

                        setTimeout(()=>{

                            $('#confirmation').html('');

                            inputEmail.classList.remove("form__input--check");
                            inputEmail.classList.remove("form__input--error");
                            circleConfirmation.classList.remove("form__i--check");
                            circleConfirmation.classList.remove("form__i--error");
                            circleConfirmation.classList.add("form__i");
                            notification.classList.remove("notification--active");

                        }, 3000);
    
                    }if(r==2){
    
                        $('#prueba').html('Algo falló, intenta nuevamente');
                    }
                }
            });
        }
    });

    return false;
});




