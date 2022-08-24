const inputEmail  = document.getElementById("form__input");
const circleConfirmation = document.getElementById("form__i");
const expresiones = {
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}


const validarEmail = (e) => {
    if(expresiones.email.test(e.target.value)){

        inputEmail.classList.add("form__input--check");
        circleConfirmation.classList.remove("fa-circle-xmark");
        circleConfirmation.classList.add("fa-circle-check");
        circleConfirmation.classList.add("form__i--check");
    }
    
    else if(e.target.value == ""){
        console.log("Aquí iria mi codigo");
        inputEmail.classList.remove("form__input--check");
        inputEmail.classList.remove("form__input--error");
        circleConfirmation.classList.remove("form__i--check");
        circleConfirmation.classList.remove("form__i--error");
        circleConfirmation.classList.add("form__i");
    }
    
    else{
        inputEmail.classList.remove("form__input--check");
        inputEmail.classList.add("form__input--error");
        circleConfirmation.classList.add("fa-circle-xmark");
        circleConfirmation.classList.remove("fa-circle-check");
        circleConfirmation.classList.remove("form__i--check");
        circleConfirmation.classList.add("form__i--error");
    }
}



inputEmail.addEventListener("blur", validarEmail);
inputEmail.addEventListener("keyup", validarEmail);