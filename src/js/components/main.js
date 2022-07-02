console.log('I want to work in your team!');

// Опция выбора тарифа по кнопке
window.addEventListener('DOMContentLoaded', function(){ 
    // Создаём плавность анимации появления попапа
    // Сначала объявим функцию FadeIn

    const fadeIn = (el, timeout, display) => {
      el.style.opacity = 0;
      el.style.display = display || 'block';
      el.style.transition = `opacity ${timeout}ms`;
      setTimeout(() => {
        el.style.opacity = 1;
      }, 10);
    }

    // Объявим функцию FadeOut

    const fadeOut = (el, timeout) => {
    el.style.opacity = 1;
    el.style.transition = `opacity ${timeout}ms`;
    el.style.opacity = 0;

    setTimeout(() => {
        el.style.display = 'none';
    }, timeout);
    };

  const btn = this.document.querySelectorAll('.card__btn');
    btn.forEach(function(eachBtn){
      eachBtn.addEventListener('click', function(){
        this.classList.add('changed');
        this.innerHTML = 'Тариф выбран';
      });
    });

    // Бургерное меню

    var menu = document.querySelector('#menu')
    ,burger = document.querySelector('#burger')
    ,burgerClose = document.querySelector('#burger.open')
    ,flag = false;

   burger.addEventListener('click', function(){      
     if(!flag) {
       fadeIn(menu, 300, 'flex');
       flag = true;          
       document.querySelector('body').classList.add('closed');

     } else {
       fadeOut(menu, 300);
       flag = false;
       document.querySelector('body').classList.remove('closed');
     }       

     burger.classList.toggle('open');

     // Скрытие меню при нажатии на один из пунктов меню

     document.querySelectorAll('.menu__link').forEach(function(oneItem){
         oneItem.addEventListener('click', function(){          

           fadeOut(menu, 300);
           flag = false;
           document.querySelector('body').classList.remove('closed');            
           burger.classList.remove('open');
         });
     });

     burgerClose.addEventListener('click', function(){
       fadeOut(menu, 300);
       flag = false;
       document.querySelector('body').classList.remove('closed');        
       burger.classList.remove('open');
     });
 });

 
//  Замена текста на кнопке "Выбрать тариф" при окне менее 992px

// Определим размер доступного размера экрана устройства:

const availableScreenWidth = window.screen.availWidth;

if(availableScreenWidth <= '992') {
  document.querySelectorAll('.card__btn').forEach(function(oneTab){
    oneTab.innerHTML='Выбрать';
  });
} else {
    oneTab.innerHTML='Выбрать тариф';
}
  
});



$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    dots:true,
    nav:false,
    margin:180,
    lazyload:true,
    slideTransition: 'ease-in-out',
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:false,
            margin:140
        },
        992:{           
            items:3,
            margin:180            
        }
    }
  });
});