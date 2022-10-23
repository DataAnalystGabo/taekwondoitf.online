const iconsCards   = document.querySelectorAll('.accordion__icon');
const boxItems     = document.querySelectorAll('.accordion__items');





iconsCards.forEach((card, i)=>{
    
    iconsCards[i].addEventListener('click', ()=>{
       // iconsCards.forEach((more, i)=>{
       //     iconsCards[i].classList.toggle('accordion__icon--active');
       // })
       iconsCards[i].classList.toggle('accordion__icon--active');
       boxItems[i].classList.toggle('accordion__items--show');
    })
});

//more.classList.toggle('accordion__more--active');