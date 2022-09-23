const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

const inputs    = document.querySelectorAll('.form__input');
const campos    = {
    name    : false,
    email   : false,
    message : false
}

const validatorInput = (expresion, input, camp)=>{
    if(expresion.test(input.value)){
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--error');
        document.getElementById(`form__input--${camp}`).classList.add('form__input--checked');
        document.getElementById(`input__i--${camp}`).classList.add('alerts__i--checked');
        document.getElementById(`input__i--${camp}`).classList.remove('fa-circle-xmark');
        document.getElementById(`input__i--${camp}`).classList.add('fa-circle-check');
        document.getElementById(`alerts__checked--${camp}`).classList.add('alerts__checked--active');
        document.getElementById(`alerts__error--${camp}`).classList.remove('alerts__error--active');

        campos[camp] = true;

    } else if (input.value == ""){
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--checked');
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--error');
        document.getElementById(`input__i--${camp}`).classList.remove('alerts__i--checked');
        document.getElementById(`input__i--${camp}`).classList.remove('alerts__i--active');
        document.getElementById(`alerts__checked--${camp}`).classList.remove('alerts__checked--active');
        document.getElementById(`alerts__error--${camp}`).classList.remove('alerts__error--active');
        
        campos[camp] = false;
    } else {
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--checked');
        document.getElementById(`form__input--${camp}`).classList.add('form__input--error');
        document.getElementById(`input__i--${camp}`).classList.remove('alerts__i--checked');
        document.getElementById(`input__i--${camp}`).classList.add('alerts__i--active');
        document.getElementById(`input__i--${camp}`).classList.add('fa-circle-xmark');
        document.getElementById(`input__i--${camp}`).classList.remove('fa-circle-check');
        document.getElementById(`alerts__checked--${camp}`).classList.remove('alerts__checked--active');
        document.getElementById(`alerts__error--${camp}`).classList.add('alerts__error--active');

        campos[camp] = false;
    }
}

const validatorTextArea = (input, camp)=>{
    if(input.value == ""){
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--checked');
        //document.getElementById(`form__input--${camp}`).classList.add('form__input--error');

        campos[camp] = false;
    } else{
        document.getElementById(`form__input--${camp}`).classList.add('form__input--checked');
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--error');

        campos[camp] = true;
    }
}

const validatorInputs = (e)=>{
    switch (e.target.name) {
        case 'name':
            validatorInput(expresiones.nombre, e.target, 'name');
        break;

        case 'email':
            validatorInput(expresiones.email, e.target, 'email');
        break;

        case 'message':
            validatorTextArea(e.target, 'message');
        break;
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validatorInputs);
    input.addEventListener('blur', validatorInputs);
});


//-----------------------------------------------------------------------------------------------------------//


$(document).ready(()=>{
    $('#submit').click((e)=>{
        e.preventDefault();
        
        if(campos.name && campos.email && campos.message){

            const datos =  $('#form').serialize();

            $.ajax({
                type: "POST",
                url: "../php/submitContact.php",
                data: datos,
                success: function (response) {
                    if(response == '1'){

                        console.log(response);

                        $('#alert').html('');
                        $('#box-alerts').removeClass('form__alerts--error');
                        $('#box-alerts').addClass('form__alerts--checked');
                        $('#alert').html('¡Tu mensaje se ha enviado!');

                        setTimeout(()=>{
                            $('#box-alerts').removeClass('form__alerts--checked');
                        }, 5000);
                    } else {

                        console.log(response);

                        $('#alert').html('');
                        $('#box-alerts').removeClass('form__alerts--checked');
                        $('#box-alerts').addClass('form__alerts--error');
                        $('#alert').html('¡Ha ocurrido un erro! Intenta nuevamente');

                        setTimeout(()=>{
                            $('#box-alerts').removeClass('form__alerts--error');
                        }, 5000);
                    }
                }
            });
            
        } else {
            $('#alert').html('');
            $('#box-alerts').removeClass('form__alerts--checked');
            $('#box-alerts').addClass('form__alerts--error');
            $('#alert').html('¡Los campos están vacíos!');

            setTimeout(()=>{
                $('#box-alerts').removeClass('form__alerts--error');
            }, 2000);
        }
    });
});