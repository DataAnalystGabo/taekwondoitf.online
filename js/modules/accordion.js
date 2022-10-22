const iconsCards   = document.querySelectorAll('.accordion__icon');
const cards        = document.querySelectorAll('.accordion__filter');
const boxItems     = document.querySelectorAll('.accordion__items');
const items        = document.querySelectorAll('.items__item');
const iconsPlus    = document.querySelectorAll('.items__icon');
const itemsContent = document.querySelectorAll('.items__content');



iconsCards.forEach((card, i)=>{
    
    iconsCards[i].addEventListener('click', ()=>{
       // iconsCards.forEach((more, i)=>{
       //     iconsCards[i].classList.toggle('accordion__icon--active');
       // })
       iconsCards[i].classList.toggle('accordion__icon--active');
       boxItems[i].classList.toggle('accordion__items--show');
    })
});

items.forEach((item, i)=>{
    items[i].addEventListener('click', ()=>{
        iconsPlus[i].classList.toggle('items__icon--minus');
        itemsContent[i].classList.toggle('items__content--show');
    })
});

//more.classList.toggle('accordion__more--active');