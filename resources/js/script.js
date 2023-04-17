var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

var swiper = new Swiper(".mySwiper3", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // quando la larghezza della finestra del browser è inferiore a 640 pixel
      
      1480: {
        slidesPerView: 5,
        spaceBetween: 30,
      }
    }
    
  });

  

  let avatarImg = document.querySelector('#avatarImg');
  let avatarBtn = document.querySelector('#avatarBtn');
  let pencilAvatar = document.querySelector('#pencilAvatar');
  let profileSubmitBtn = document.querySelector('#profileSubmitBtn');
  
if(pencilAvatar){
  pencilAvatar.addEventListener('click', () => {
    avatarBtn.click();
  });
  profileSubmitBtn.addEventListener('change', () => {
    profileSubmitBtn.submit();
  });
}