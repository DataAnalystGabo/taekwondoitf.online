const buttonFacebook = document.getElementById('barshare__facebook');
const buttonTwitter  = document.getElementById('barshare__twitter');
const buttonTelegram = document.getElementById('barshare__telegram');
const buttonWhatsapp = document.getElementById('barshare__whatsapp');
const buttonGmail    = document.getElementById('barshare__gmail');

const pageUrl = location.href;
const message = '¡Mirá esta noticia, sólo te tomará 5 minutos de lectura!';

const facebookApi = 'https://www.facebook.com/sharer/sharer.php?u=' + pageUrl;

const twitterApi  = `https://twitter.com/intent/tweet?text=${pageUrl}. ${message}`;
const telegramApi = `https://t.me/share/url?url=${pageUrl}&text=${message}`;
const whatsappApi = `https://wa.me/?text=urlencodedtext=${pageUrl}. ${message}`;



buttonFacebook.addEventListener('click', ()=>{
    window.open(url = facebookApi, target = 'blank')
});

buttonTwitter.addEventListener('click', ()=>{
    window.open(url = twitterApi, target = 'blank')
});

buttonTelegram.addEventListener('click', ()=>{
    window.open(url = telegramApi, target = 'blank');
}); 

buttonWhatsapp.addEventListener('click', ()=>{
    window.open(url = whatsappApi, target = 'blank')
});

