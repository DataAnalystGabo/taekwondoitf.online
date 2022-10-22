const iconsCards = document.querySelectorAll('.accordion__icon');
const cards      = document.querySelectorAll('.accordion__filter');
const items      = document.querySelectorAll('.accordion__items');



iconsCards.forEach((card, i)=>{
    
    iconsCards[i].addEventListener('click', ()=>{
       // iconsCards.forEach((more, i)=>{
       //     iconsCards[i].classList.toggle('accordion__icon--active');
       // })
       iconsCards[i].classList.toggle('accordion__icon--active');
       items[i].classList.toggle('accordion__items--hidden');
    })
});

//more.classList.toggle('accordion__more--active');