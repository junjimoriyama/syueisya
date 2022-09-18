// ローディング

console.log('test')

window.addEventListener('load', function () {
  setTimeout(function () {
    document.querySelector('.message-inside ').classList.add('show')
  }, 1000)
});


// ハンバーガーメニュー

const menuBotton = document.querySelector('.menu-botton'),
      nav = document.querySelector('.nav'),
      copy = document.querySelector('.hero-copy');

menuBotton.onclick = () => {
  nav.classList.toggle('open');
  copy.classList.toggle('open');
  menuBotton.classList.toggle('open');
}


// スクロール

const scrollTargetEllement = document.querySelectorAll
('.seed, .wave-top, .news, .wave-bottom, .special-1, .special-2, .special-3, .people-works, .survey, .recruit, .recuruit-illust  ');
document.addEventListener('scroll', function () {
  for (let i = 0; i < scrollTargetEllement.length; i++) {
    emergingElementDistance = scrollTargetEllement[i].
      getBoundingClientRect().top + scrollTargetEllement[i].clientHeight * .5
    if (window.innerHeight > emergingElementDistance) {
      scrollTargetEllement[i].classList.add('fade-in');
    }
  }
});


// スライドショー
const swiper = new Swiper('.swiper', {
  slidesPerView: 2,
  spaceBetween: 18,
  // Optional parameters
  /* direction: 'vertical', */
  loop: true,

  breakpoints: {
    769: {
      slidesPerView: 6,
    }
  },

  /*  Navigation arrows */
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});