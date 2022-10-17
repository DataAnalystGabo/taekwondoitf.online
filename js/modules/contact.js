const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}
const buttonSubmit  = document.getElementById('btca-submit');
const inputs        = document.querySelectorAll('.form__input');
const alert         = document.getElementById('alert');
const boxAlerts     = document.getElementById('box-alerts');
const form          = document.getElementById('form');
const campos        = {
    name    : false,
    email   : false,
    message : false
}

console.log(campos.name);
console.log(campos.email);
console.log(campos.message);

const validatorInput = (expresion, input, camp)=>{
    if(expresion.test(input.value)){
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--error');
        document.getElementById(`form__input--${camp}`).classList.add('form__input--checked');
        document.getElementById(`alerts--${camp}`).classList.add('alerts--active');
        document.getElementById(`alerts__i--${camp}`).classList.add('alerts__i--checked');
        document.getElementById(`alerts__i--${camp}`).classList.remove('fa-circle-xmark');
        document.getElementById(`alerts__i--${camp}`).classList.add('fa-circle-check');
        document.getElementById(`alerts__checked--${camp}`).classList.add('alerts__checked--active');
        document.getElementById(`alerts__error--${camp}`).classList.remove('alerts__error--active');
        campos[camp] = true;

    } else if (input.value == ""){
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--checked');
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--error');
        document.getElementById(`alerts--${camp}`).classList.remove('alerts--active');
        campos[camp] = false;

    } else {
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--checked');
        document.getElementById(`form__input--${camp}`).classList.add('form__input--error');
        document.getElementById(`alerts--${camp}`).classList.add('alerts--active');
        document.getElementById(`alerts__i--${camp}`).classList.remove('alerts__i--checked');
        document.getElementById(`alerts__i--${camp}`).classList.remove('fa-circle-check');
        document.getElementById(`alerts__i--${camp}`).classList.add('fa-circle-xmark');
        document.getElementById(`alerts__checked--${camp}`).classList.remove('alerts__checked--active');
        document.getElementById(`alerts__error--${camp}`).classList.add('alerts__error--active');
        campos[camp] = false;

    }
}

const validatorTextArea = (input, camp)=>{
    if(input.value == ""){
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--checked');
        campos[camp] = false;

    } else{
        document.getElementById(`form__input--${camp}`).classList.add('form__input--checked');
        document.getElementById(`form__input--${camp}`).classList.remove('form__input--error');
        campos[camp] = true;

    }
}

export const validatorInputs = (e)=>{
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


export const sendContact = buttonSubmit.addEventListener('click', (
    function(e){
        e.preventDefault();

        if(campos.name && campos.email && campos.message){
            let datos = new FormData(form);
            
            fetch('../php/contact-backend.php', {
                method : 'POST',
                body   : datos
            })
            .then(res => res.json())
            .then(echo => {
                if(echo == 1){
                    
                    form.reset();
                    boxAlerts.classList.remove('form__alerts--error');
                    boxAlerts.classList.add('form__alerts--checked');
                    alert.innerHTML = '¡Tu mensaje se ha enviado con éxito!';

                    document.querySelectorAll('.alerts').forEach((alert)=>{
                            alert.classList.remove('alerts--active');
                    });

                    document.querySelectorAll('.form__input').forEach((input)=>{
                            input.classList.remove('form__input--checked');
                    });
                        
                    setTimeout(()=>{
                            boxAlerts.classList.remove('form__alerts--checked');
                    }, 5000);

                    campos.name = false;
                    campos.email = false;
                    campos.message = false;
                } else {
                    console.log('hubo un error');
                }
            })

        } else {
            alert.innerHTML = '';
            boxAlerts.classList.remove('form__alerts--checked');
            boxAlerts.classList.add('form__alerts--error');
            alert.innerHTML = '¡Los campos están vacíos!';

            setTimeout(()=>{
                boxAlerts.classList.remove('form__alerts--error');
                alert.innerHTML = '';
            }, 2000);
        }
    }
));

/*
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

                        $('#form').trigger('reset');
                        $('#box-alerts').removeClass('form__alerts--error');
                        $('#box-alerts').addClass('form__alerts--checked');
                        $('#alert').html('¡Tu mensaje se ha enviado!');

                        document.querySelectorAll('.alerts').forEach((alert)=>{
                            alert.classList.remove('alerts--active');
                        });

                        document.querySelectorAll('.form__input').forEach((input)=>{
                            input.classList.remove('form__input--checked');
                        });
                        
                        setTimeout(()=>{
                            $('#box-alerts').removeClass('form__alerts--checked');
                        }, 5000);

                        campos['name'] = false;
                        campos['email'] = false;
                        campos['message'] = false;

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
}); */