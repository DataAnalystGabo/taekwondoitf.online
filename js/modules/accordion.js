const iconsCards   = document.querySelectorAll('.accordion__icon');
const boxCards     = document.querySelectorAll('.accordion__card');
const boxItems     = document.querySelectorAll('.accordion__items')




boxCards.forEach((card, i)=>{
    boxCards[i].addEventListener('click', ()=>{
       iconsCards[i].classList.toggle('accordion__icon--active');
       boxItems[i].classList.toggle('accordion__items--show');
    })
});
