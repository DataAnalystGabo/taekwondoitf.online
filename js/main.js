import { menuHambur, animacionBar } from './modules/menu.js';
menuHambur.addEventListener("click", animacionBar);

import { inputEmail, validarEmail, sendAjax } from './modules/newsletter.js';
inputEmail.addEventListener('blur', validarEmail);
inputEmail.addEventListener('keyup', validarEmail);
window.addEventListener('load', sendAjax, false);
//$('#window').ready(sendAjax); versión jquery

