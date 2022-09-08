//---------------------------------------------------------------//
//-----------------Validación de campos con JS Vanilla-----------//

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const inputs      = document.querySelectorAll('#form input');
const selectors   = document.querySelectorAll('#form select');

const validator = (e)=>{
    switch (e.target.name) {
        case 'escuela':
            if(expresiones.nombre.test(e.target.value)){
                document.getElementById('input__escuela').classList.add('input__text--checked');
                document.getElementById('input__alerts').classList.add('input__alerts--active');
                document.getElementById('input__i').classList.remove('fa-circle-xmark');
                document.getElementById('input__i').classList.add('fa-circle-check');
                document.getElementById('input__i').classList.add('input__alerts__i--checked');
                document.getElementById('input__alerts__checked').classList.add('input__alerts__checked--active');
                document.getElementById('input__alerts__error').classList.remove('input__alerts__error--active');
            }else if(e.target.value == ''){
                document.getElementById('input__escuela').classList.remove('input__text--checked');
                document.getElementById('input__alerts').classList.remove('input__alerts--active');
                document.getElementById('input__i').classList.remove('fa-circle-check');
                document.getElementById('input__i').classList.remove('input__alerts__i--checked');
                document.getElementById('input__alerts__checked').classList.remove('input__alerts__checked--active');
                document.getElementById('input__escuela').classList.remove('input__text--error');
                document.getElementById('input__alerts').classList.remove('input__alerts--active');
                document.getElementById('input__alerts__error').classList.remove('input__alerts__error--active');
            }else{
                document.getElementById('input__escuela').classList.remove('input__text--checked');
                document.getElementById('input__escuela').classList.add('input__text--error');
                document.getElementById('input__alerts').classList.add('input__alerts--active');
                document.getElementById('input__i').classList.add('fa-circle-xmark');
                document.getElementById('input__i').classList.remove('fa-circle-check');
                document.getElementById('input__i').classList.remove('input__alerts__i--checked');
                document.getElementById('input__alerts__checked').classList.remove('input__alerts__checked--active');
                document.getElementById('input__alerts__error').classList.add('input__alerts__error--active');
            }
        break;

        case 'instructor':
            console.log('Ejecutando...');
        break;

        case 'coach':
            console.log('Ejecutando...');
        break;

        case 'email':
            console.log('Ejecutando...');
        break;
        
        case 'celular':
            console.log('Ejecutando...');
        break;

        case 'othercamp':
            console.log('Ejecutando...');
        break;

        case 'competidor[]':
            console.log('Ejecutando...');
        break;

        case 'dni[]':
            console.log('Ejecutando...');
        break;
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validator);
    input.addEventListener('blur', validator);
});

selectors.forEach((select)=>{
    select.addEventListener('keyup', validator);
    select.addEventListener('blur', validator);
});



/*const validator = function(e){
    e.preventDefault();
    if(expresiones.email.test(e.target.value)){
        iconCheck.classList.add('input__i--checked');
        inputEmail.classList.add('input__text--checked');
    }else{
        iconCheck.classList.remove('input__i--checked');
        inputEmail.classList.remove('input__text--checked');
        iconCheck.classList.add('input__i--error');
        inputEmail.classList.add('input__text--error');
    }
}


inputEmail.addEventListener('blur', validator);
inputEmail.addEventListener('keyup', validator); */


/*const submit = function(){
    $('#modal--cover').removeClass('modal--cover--disabled');
    $('#modal--cover').addClass('modal--cover--active');

    $('#modal__window').removeClass('modal__window--disabled');
    $('#modal__window').addClass('modal__window--active');

    $('#modal__button').click(function(e){
        e.preventDefault();

        $('#modal--cover').removeClass('modal--cover--active');
        $('#modal--cover').addClass('modal--cover--disabled');

        $('#modal__window').removeClass('modal__window--active');
        $('#modal__window').addClass('modal__window--disabled');
        
    });
} */


$(document).ready(function(){
    $('#submit').click(function(e){

        e.preventDefault();

       //const datos = $('#pageform').serialize();

       const escuela    = $('#escuela').val();
       const instructor = $('#instructor').val();
       const coach      = $('#coach').val();
       const email      = $('#email').val();
       const celular    = $('#celular').val();
       const othercamp  = $('#othercamp').val();

       const competidor = $('input[name=competidor]').val();

       const dni        = $('#dni').val();
       const genero     = $('#genero').val();
       const categoria  = $('#categoria').val();
       const edad       = $('#edad').val();
       const peso       = $('#peso').val();

       console.log(competidor);



       /* $.each(competidor,function(){
            console.log($(this).val());

            if( $(this).val() === undefined ){
                console.log('Hay valores vacíos');
            }else{
                console.log('No hay valores vacíos');
            }
        }); */

        if( escuela     == '' ||
            instructor  == '' ||
            coach       == '' ||
            email       == '' ||
            celular     == '' ||
            othercamp   == '' || 
            dni         == '' ||
            genero      == '' ||
            categoria   == '' ||
            edad        == '' ||
            peso        == '' ){

            submit();
            $('#modal__message').html('Debe completar todos los campos, sin excepción.');
        }else{
            console.log('El campo esta lleno');

            $.ajax({
                url: './php/prueba.php',
                type: 'post',
                data: {
                    escuela,
                    instructor,
                    coach,
                    email,
                    celular,
                    othercamp,
                    competidor,
                    dni,
                    genero,
                    categoria,
                    edad,
                    peso
                },
                success: function(r){
                    if(r == 1){
                        console.log(r);
                        submit();
                        $('#modal__message').html('Se enviaron todos los datos con éxito');
    
                        $('.input__texto').val('');
                        $('.selector').val('');
    
                    }else if(r == 2){
                        console.log(r);
                        submit();
                        $('#modal__message').html('Un DNI ingresado ya se encuentra registrado. Contactese con support@infotkd.com');
                        
                    }else{
                        console.log(r);
                        submit();
                        $('#modal__message').html('Ocurrió un error. Contáctese con support@infotkd.com');
                    }
                }
            }); 
        } 
    });
});