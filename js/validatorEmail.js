const inputEmail         = document.getElementById('form__input');
const circleConfirmation = document.getElementById('form__i');
const buttonSubmit       = document.getElementById('submit');
const alertError         = document.querySelector('.alert--error');
const alertCheck         = document.querySelector('.alert--check');
const expresiones        = { email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, }


const validarEmail = (e) => {
    e.preventDefault();

    if(expresiones.email.test(e.target.value)){

        inputEmail.classList.add('form__input--check');
        circleConfirmation.classList.remove('fa-circle-xmark');
        circleConfirmation.classList.add('fa-circle-check');
        circleConfirmation.classList.add('form__i--check');
        alertError.classList.remove('alert--error--active');
        alertCheck.classList.add('alert--check--active');
    }

    else if(e.target.value == ""){
        inputEmail.classList.remove('form__input--check');
        inputEmail.classList.remove('form__input--error');
        circleConfirmation.classList.remove('form__i--check');
        circleConfirmation.classList.remove('form__i--error');
        circleConfirmation.classList.add('form__i');
        alertCheck.classList.remove('alert--check--active');
        alertError.classList.remove('alert--error--active');
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
    }
}

inputEmail.addEventListener('blur', validarEmail);
inputEmail.addEventListener('keyup', validarEmail);

$(document).ready(function(){
    $('#submit').click(function(e){

        e.preventDefault();

        const email = $('#form__input').val();
        const data = 'email='+email;
        
        if(email == ''){

            $('#form__input').removeClass('form__input--check');
            $('#form__input').addClass('form__input--error');
            $('#form__i').addClass('fa-circle-xmark');
            $('#form__i').removeClass('fa-circle-check');
            $('#form__i').removeClass('form__i--check');
            $('#form__i').addClass('form__i--error');
            $('.alert--notification').addClass('alert--notification--error');
            $('.alert--notification').html('¡Ingrese un e-mail!');

            setTimeout(()=>{
                $('#form__input').removeClass('form__input--error');
                $('#form__i').removeClass('fa-circle-xmark');
                $('#form__i').removeClass('form__i--error');
                $('.alert--notification').removeClass('alert--notification--error');
                $('.alert--notification').html('');
            },5000);

        }else if(expresiones.email.test(email)) {

            $.ajax({
                type    : 'POST',
                url     : './php/suscribe.php',
                data    : data,
                success : function(r){
                    if(r==1){
                        $('.alert--notification').addClass('alert--notification--check');
                        $('.alert--notification').html('Enviado con exito');
                        $('#form__input').val('');

                        setTimeout(()=>{

                            $('.alert--notificacion').html('');
                            $('#form__input').removeClass('form__input--check');
                            $('#form__input').removeClass('form__input--error');
                            $('#form__i').removeClass('form__i--check');
                            $('#form__i').removeClass('form__i--error');
                            $('#form__i').addClass('form__i');
                            $('.alert--error').removeClass('alert--error--active');
                            $('.alert--check').removeClass('alert--check--active');
                            $('.alert--notification').html('');

                        }, 3000);
    
                    }else if(r==2){

                        $('.alert--notification').html('Algo falló, intenta nuevamente');
                    }else{
                        console.log(r);
                    }
                }
            });
        }
    });

    return false;
});




