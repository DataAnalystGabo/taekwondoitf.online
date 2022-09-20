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

const inputs    = document.querySelectorAll('#form input');
const selectors = document.querySelectorAll('#form select');
const campos    = {
    escuela :    false,
    instructor : false,
    coach:       false,
    email:       false,
    celular:     false,
    othercamp:   false,
    competidor:  false,
    dni:         false,
    categoria:   false,
    edad:        false,
    peso:        false
}

const validatorInput = (expresion, input, camp)=>{
    if(expresion.test(input.value)){
        document.getElementById(`input__${camp}`).classList.add('input__text--checked');
        document.querySelector(`#input__alerts--${camp} `).classList.add('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-xmark');
        document.querySelector(`#input__i--${camp}`).classList.add('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.add('input__alerts__i--checked');
        document.querySelector(`#input__alerts__checked--${camp}`).classList.add('input__alerts__checked--active');
        document.querySelector(`#input__alerts__error--${camp}`).classList.remove('input__alerts__error--active');
        campos[camp] = true;

    }else if(input.value == ''){
        document.getElementById(`input__${camp}`).classList.remove('input__text--checked');
        document.querySelector(`#input__alerts--${camp} `).classList.remove('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.remove('input__alerts__i--checked');
        document.querySelector(`#input__alerts__checked--${camp}`).classList.remove('input__alerts__checked--active');
        document.getElementById(`input__${camp}`).classList.remove('input__text--error');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-xmark');
        document.querySelector(`#input__alerts__error--${camp}`).classList.remove('input__alerts__error--active');
        campos[camp] = false;

    }else{
        document.getElementById(`input__${camp}`).classList.remove('input__text--checked');
        document.getElementById(`input__${camp}`).classList.add('input__text--error');
        document.querySelector(`#input__alerts--${camp} `).classList.add('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.add('fa-circle-xmark');
        document.querySelector(`#input__i--${camp}`).classList.remove('input__alerts__i--checked');
        document.querySelector(`#input__alerts__checked--${camp}`).classList.remove('input__alerts__checked--active');
        document.querySelector(`#input__alerts__error--${camp}`).classList.add('input__alerts__error--active');
        campos[camp] = false;
    }
}


const validatorInputs = (e)=>{
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
        campos[camp] = false;
    }else{
        document.getElementById(`select__${camp}`).classList.remove('selector--error');
        document.getElementById(`select__${camp}`).classList.add('selector--checked');
        campos[camp] = true;
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
    select.addEventListener('blur', validatorSelectors);
});


//---------------------------------------------------------------//
//-----------------Enviar formulario con Jquery y AJAX-----------//

$(document).ready(function(){
    $('#submit').click(function(e){

        e.preventDefault();

        if(campos.escuela && campos.instructor && campos.coach
        && campos.email && campos.celular && campos.othercamp
        && campos.competidor && campos.dni && campos.genero
        && campos.categoria && campos.edad && campos.peso){

            const datos = $('#form').serialize();

            $.ajax({
                url: './php/pageFormSubmit.php',
                type: 'post',
                data: datos,
                success: (r)=>{
                    if(r == 1){
                        console.log(r);
                        $('#messages').addClass('messages--active');
                        $('#messages__p').html('');
                        $('#messages').removeClass('messages--error');
                        $('#messages').addClass('messages--checked');
                        $('#messages__p').html('¡Todos los datos se enviaron con éxito!');
                        $('#form').trigger('reset');

                        //programar borrado automatico de los mensajes de confirmación de los inputs
                        document.querySelectorAll('.input__alerts').forEach((alert)=>{
                            alert.classList.remove('input__alerts--active');
                        });

                        document.querySelectorAll('.input__text').forEach((input)=>{
                            input.classList.remove('input__text--checked');
                            input.classList.remove('input__text--error');
                        });

                        document.querySelectorAll('.selector').forEach((selector)=>{
                            selector.classList.remove('selector--checked');
                            selector.classList.remove('selector--error');
                        });

                        setTimeout(function(){
                            $('#messages').removeClass('messages--active');
                        },5000);
    
                    }else if(r == 2){
                        $('#messages').addClass('messages--active');
                        $('#messages').addClass('messages--error');
                        $('#messages__p').html('El dni ingresado ya se encuentra registrado. Contáctese con <strong>support@infotkd.com</strong>');
                    }else{
                        console.log(r);
                        $('#messages').addClass('messages--active');
                        $('#messages').addClass('messages--error');
                        $('#messages__p').html('Ocurrió un error');
                    }
                }
            });
        }else{
            $('#messages').addClass('messages--active');
            $('#messages').removeClass('messages--checked');
            $('#messages').addClass('messages--error');
            $('#messages__p').html('¡Debe completar todos los campos!');
            setTimeout(function(){
                $('#messages').removeClass('messages--active');
            },3000);
        };
    });
});


//---------------------------------------------------------------//
//-----------------Activando el label de los inputs texts--------//
const showLabel = (campo)=>{
    document.getElementById(`input__label--${campo}`).classList.add('input__label--active');  
};

const hiddenLabel = (campo)=>{
    document.getElementById(`input__label--${campo}`).classList.remove('input__label--active');
};


const activeLabels = (e)=>{
    switch (e.target.name) {
        case 'escuela':
                showLabel('escuela');
            break;
        case 'instructor':
                showLabel('instructor');
            break;
        case 'coach':
                showLabel('coach');
            break;
        case 'email':
                showLabel('email');
            break;
        case 'celular':
                showLabel('celular');
            break;
        case 'othercamp':
                showLabel('othercamp');
            break;
        case 'competidor':
                showLabel('competidor');
            break;
        case 'dni':
                showLabel('dni');
            break;
   }
};


const disableLabels = (e)=>{
    switch (e.target.name) {
        case 'escuela':
                hiddenLabel('escuela');
            break;
        case 'instructor':
                hiddenLabel('instructor');
            break;
        case 'coach':
                hiddenLabel('coach');
            break;
        case 'email':
                hiddenLabel('email');
            break;
        case 'celular':
                hiddenLabel('celular');
            break;
        case 'othercamp':
                hiddenLabel('othercamp');
            break;
        case 'competidor':
                hiddenLabel('competidor');
            break;
        case 'dni':
                hiddenLabel('dni');
            break;
   }
}



inputs.forEach((input)=>{
    input.addEventListener('focus', activeLabels);
    input.addEventListener('blur', disableLabels);
});

