const iconsCards   = document.querySelectorAll('.accordion__icon');
const boxCards     = document.querySelectorAll('.accordion__card');
const boxItems     = document.querySelectorAll('.accordion__items')

iconsCards.forEach((icon, i)=>{
    iconsCards[i].addEventListener('click', ()=>{
       iconsCards[i].classList.toggle('accordion__icon--active');
       boxItems[i].classList.toggle('accordion__items--show');
    })
    boxItems[i].classList.remove('accordion__items--show');
});
