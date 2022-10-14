const form                = document.getElementById('form');
export const inputEmail   = document.getElementById('form__input');
const circleConfirmation  = document.getElementById('form__i');
const buttonSubmit        = document.getElementById('submit');
const alertError          = document.querySelector('.alert--error');
const alertCheck          = document.querySelector('.alert--check');
const alertNotif          = document.querySelector('.alert--notification');
const expresiones         = { email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, };
const validador           = { email : false};


export const validarEmail = (e) => {
    e.preventDefault();

    if(expresiones.email.test(e.target.value)){

        inputEmail.classList.add('form__input--check');
        circleConfirmation.classList.remove('fa-circle-xmark');
        circleConfirmation.classList.add('fa-circle-check');
        circleConfirmation.classList.add('form__i--check');
        alertError.classList.remove('alert--error--active');
        alertCheck.classList.add('alert--check--active');
        validador.email = true;
    }

    else if(e.target.value == ""){
        inputEmail.classList.remove('form__input--check');
        inputEmail.classList.remove('form__input--error');
        circleConfirmation.classList.remove('form__i--check');
        circleConfirmation.classList.remove('form__i--error');
        circleConfirmation.classList.add('form__i');
        alertCheck.classList.remove('alert--check--active');
        alertError.classList.remove('alert--error--active');
        validador.email = false;
    }
    
    else{
        inputEmail.classList.remove('form__input--check');
        inputEmail.classList.add('form__input--error');
        circleConfirmation.classList.add('fa-circle-xmark');
        circleConfirmation.classList.remove('fa-circle-check');
        circleConfirmation.classList.remove('form__i--check');
        circleConfirmation.classList.add('form__i--error');
        alertCheck.classList.remove('alert--check--active');
        alertError.classList.add('alert--error--active');
        validador.email = false;
    }
}


export const sendAjax = buttonSubmit.addEventListener('click', function(e){
    e.preventDefault();
    
    let datos = new FormData(form);

    if (datos.get('email') == '') {

        inputEmail.classList.remove('form__input--check');
        inputEmail.classList.add('form__input--error');
        circleConfirmation.classList.add('fa-circle-xmark');
        circleConfirmation.classList.remove('fa-circle-check');
        circleConfirmation.classList.remove('form__i--check');
        circleConfirmation.classList.add('form__i--error');
        alertNotif.classList.remove('alert--notification--check');
        alertNotif.classList.add('alert--notification--error');
        alertNotif.innerHTML = '¡Ingrese un e-mail!';

        setTimeout(() => {
            inputEmail.classList.remove('form__input--error');
            circleConfirmation.classList.remove('fa-circle-xmark');
            circleConfirmation.classList.remove('form__i--error');
            alertNotif.classList.remove('alert--notification--error');
            alertNotif.innerHTML = '';
        }, 5000);

    }else if(validador.email){

        fetch('./php/newsletter.php', {
            method : 'POST',
            body   : datos
        }) 
        .then(res => res.json())
        .then(echo => {
            if(echo == 1){
                alertNotif.classList.add('alert--notification--check');
                alertNotif.innerHTML = 'Enviado con exito baby';
                form.reset();
                validador.email = false;
                
                setTimeout(() => {
                    alertNotif.innerHTML = '';
                    inputEmail.classList.remove('form__input--check');
                    inputEmail.classList.remove('form__input--error');
                    circleConfirmation.classList.remove('form__i--check');
                    circleConfirmation.classList.remove('form__i--error');
                    circleConfirmation.classList.add('form__i');
                    alertError.classList.remove('alert--error--active');
                    alertCheck.classList.remove('alert--check--active');
                }, 3000);

            }else{
            console.log('hola');
            }
        })
    }
});

inputEmail.addEventListener('blur', validarEmail);
inputEmail.addEventListener('keyup', validarEmail);
window.addEventListener('load', sendAjax, false);

//$('#window').ready(sendAjax); versión jquery 