const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	celular: /^\d{7,14}$/, // 7 a 14 numeros.
    dni: /^\d{7,8}$/ // 7 a 14 numeros.
}
const inputs          = document.querySelectorAll('#form input');
const form            = document.querySelector('#form');
const buttonSubmit    = document.getElementById('submit');
const messages        = document.querySelector('.messages');
const selectors       = document.querySelectorAll('#form select');
const validator       = {
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
        document.querySelector(`#input__i--${camp}`).classList.add('input__i--checked');
        document.querySelector(`#input__checked--${camp}`).classList.add('input__checked--active');
        document.querySelector(`#input__error--${camp}`).classList.remove('input__error--active');
        validator[camp] = true;

    }else if(input.value == ''){
        document.getElementById(`input__${camp}`).classList.remove('input__text--checked');
        document.querySelector(`#input__alerts--${camp} `).classList.remove('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.remove('input__i--checked');
        document.querySelector(`#input__checked--${camp}`).classList.remove('input__checked--active');
        document.getElementById(`input__${camp}`).classList.remove('input__text--error');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-xmark');
        document.querySelector(`#input__error--${camp}`).classList.remove('input__error--active');
        validator[camp] = false;

    }else{
        document.getElementById(`input__${camp}`).classList.remove('input__text--checked');
        document.getElementById(`input__${camp}`).classList.add('input__text--error');
        document.querySelector(`#input__alerts--${camp} `).classList.add('input__alerts--active');
        document.querySelector(`#input__i--${camp}`).classList.remove('fa-circle-check');
        document.querySelector(`#input__i--${camp}`).classList.add('fa-circle-xmark');
        document.querySelector(`#input__i--${camp}`).classList.remove('input__i--checked');
        document.querySelector(`#input__checked--${camp}`).classList.remove('input__checked--active');
        document.querySelector(`#input__error--${camp}`).classList.add('input__error--active');
        validator[camp] = false;
    }
}

const validatorSelect = (input, camp)=>{
    if(input === ''){
        document.getElementById(`select__${camp}`).classList.add('selector--error');
        validator[camp] = false;
    }else{
        document.getElementById(`select__${camp}`).classList.remove('selector--error');
        document.getElementById(`select__${camp}`).classList.add('selector--checked');
        validator[camp] = true;
    };
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

const validatorSelects = (e)=>{
    switch (e.target.name) {
        case 'genero':
            validatorSelect(e.target.value, 'genero');
        break;

        case 'categoria':
            validatorSelect(e.target.value, 'categoria');
        break;

        case 'edad':
            validatorSelect(e.target.value, 'edad');
        break;

        case 'peso':
            validatorSelect(e.target.value, 'peso');
        break;
    }
}


inputs.forEach((input)=>{
    input.addEventListener('keyup', validatorInputs);
    input.addEventListener('blur', validatorInputs);
});

selectors.forEach((select)=>{
    select.addEventListener('change', validatorSelects);
    select.addEventListener('blur', validatorSelects);
});

const sendForm = buttonSubmit.addEventListener('click', function(e){
    e.preventDefault();

    if(validator.escuela && validator.instructor && validator.coach
        && validator.email && validator.celular && validator.othercamp
        && validator.competidor && validator.dni && validator.genero
        && validator.categoria && validator.edad && validator.peso){

        const datos = new FormData(form);

        fetch('../php/ranqueable-backend.php', {
            method : 'POST',
            body   : datos
        })
        .then(res => res.json())
        .then(echo => {

            if(echo == 1){
                form.reset();
                validator.escuela    = false;
                validator.instructor = false;
                validator.coach      = false;
                validator.email      = false;
                validator.celular    = false;
                validator.othercamp  = false;
                validator.competidor = false;
                validator.dni        = false;
                validator.categoria  = false;
                validator.edad       = false;
                validator.peso       = false;
                messages.innerHTML = '';
                messages.classList.add('messages--active');
                messages.classList.remove('messages--error');
                messages.classList.add('messages--checked');
                messages.innerHTML = '¡Todos los datos se enviaron con éxito!';

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
                    messages.classList.remove('messages--active');
                },5000);
            } else if(echo == 2){
                console.log('El dni ingresado ya se encuentra inscripto');
                messages.innerHTML = '';
                messages.classList.add('messages--active');
                messages.classList.remove('messages--checked');
                messages.classList.add('messages--error');
                messages.innerHTML = 'El DNI ingresado ya se encuentra registrado. Por favor, envíenos un mensaje a través de la página contacto';
           };

        });
    } else {
        messages.innerHTML = '';
        messages.classList.add('messages--active');
        messages.classList.remove('messages--checked');
        messages.classList.add('messages--error');
        messages.innerHTML = '¡Recuerde: debe completar todos los campos!';

        setTimeout(function(){
            messages.classList.remove('messages--active');
        },3000);
    }
});
