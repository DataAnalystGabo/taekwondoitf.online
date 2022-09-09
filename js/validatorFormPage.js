//---------------------------------------------------------------//
//-----------------Validación de campos con JS Vanilla-----------//

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	celular: /^\d{7,14}$/, // 7 a 14 numeros.
    dni: /^\d{7,8}$/ // 7 a 14 numeros.
}

const inputs        = document.querySelectorAll('#form input');
const selectors     = document.querySelectorAll('#form select');

const validatorInput = (expresion, input, camp)=>{
    if(expresion.test(input.value)){
        document.getElementById(`input__${camp}`).classList.add('input__text--checked');
        document.querySelector(`#input__alerts--${camp} `).classList.add('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-xmark');
        document.querySelector(`#input__i--${camp}`).classList.add('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.add('input__alerts__i--checked');
        document.querySelector(`#input__alerts__checked--${camp}`).classList.add('input__alerts__checked--active');
        document.querySelector(`#input__alerts__error--${camp}`).classList.remove('input__alerts__error--active');
    }else if(input.value == ''){
        document.getElementById(`input__${camp}`).classList.remove('input__text--checked');
        document.querySelector(`#input__alerts--${camp} `).classList.remove('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.remove('input__alerts__i--checked');
        document.querySelector(`#input__alerts__checked--${camp}`).classList.remove('input__alerts__checked--active');
        document.getElementById(`input__${camp}`).classList.remove('input__text--error');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-xmark');
        document.querySelector(`#input__alerts__error--${camp}`).classList.remove('input__alerts__error--active');
    }else{
        document.getElementById(`input__${camp}`).classList.remove('input__text--checked');
        document.getElementById(`input__${camp}`).classList.add('input__text--error');
        document.querySelector(`#input__alerts--${camp} `).classList.add('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.add('fa-circle-xmark');
        document.querySelector(`#input__i--${camp}`).classList.remove('input__alerts__i--checked');
        document.querySelector(`#input__alerts__checked--${camp}`).classList.remove('input__alerts__checked--active');
        document.querySelector(`#input__alerts__error--${camp}`).classList.add('input__alerts__error--active');
    }
}


const validatorInputs = (e)=>{
    console.log(e.target.name);
    switch (e.target.name) {
        
        case 'escuela':
            validatorInput(expresiones.nombre, e.target, 'escuela');
        break;

        case 'instructor':
            validatorInput(expresiones.nombre, e.target, 'instructor');
        break;

        case 'coach':
            validatorInput(expresiones.nombre, e.target, 'coach');
        break;

        case 'email':
            validatorInput(expresiones.email, e.target, 'email');
        break;
        
        case 'celular':
            validatorInput(expresiones.celular, e.target, 'celular');
        break;

        case 'othercamp':
            validatorInput(expresiones.nombre, e.target, 'othercamp');
        break;

        case 'competidor':
            validatorInput(expresiones.nombre, e.target, 'competidor');
        break;

        case 'dni':
            validatorInput(expresiones.dni, e.target, 'dni');
        break;
    }
}

const validatorSelector = (input, camp)=>{
    if(input === ''){
        document.getElementById(`select__${camp}`).classList.add('selector--error');
    }else{
        document.getElementById(`select__${camp}`).classList.remove('selector--error');
        document.getElementById(`select__${camp}`).classList.add('selector--checked');
    };
}

const validatorSelectors = (e)=>{
    switch (e.target.name) {
        case 'genero':
            validatorSelector(e.target.value, 'genero');
        break;

        case 'categoria':
            validatorSelector(e.target.value, 'categoria');
        break;

        case 'edad':
            validatorSelector(e.target.value, 'edad');
        break;

        case 'peso':
            validatorSelector(e.target.value, 'peso');
        break;
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validatorInputs);
    input.addEventListener('blur', validatorInputs);
});

selectors.forEach((select)=>{
    select.addEventListener('click', validatorSelectors);
});


//---------------------------------------------------------------//
//-----------------Enviar formulario con Jquery y AJAX-----------//

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