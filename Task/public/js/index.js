new WOW().init();

$('.owl-home-slider').owlCarousel({
  loop: false,
  margin: 0,
  nav: true,
  dots: false,
  items: 1,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  smartSpeed: 450
  // autoplay: true
});
$('#home-owl-carousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: false,
  items: 1,
  // responsiveClass: true,
  responsive: {
    600: {
      items: 1
    },
    767: {
      items: 1
    },
    768: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});

$('.owl-details').owlCarousel({
  items: 1,
  loop: true,
  // rtl: true,
  animateIn: 'fadeInRight',
  animateOut: 'fadeOutLeft',
  center: true,
  URLhashListener: true,
  autoplayHoverPause: true,
  startPosition: 'URLHash'
});

if (
  document.querySelector('.header-container') ||
  document.querySelector('.visible-header-md')
) {
  window.addEventListener('scroll', function() {
    const UIheader = document.querySelector('.header-container');
    const UIheaderWrapperMd = document.querySelector('.visible-header-md');
    if (window.scrollY >= 100) {
      UIheader.classList.add('header-colored');
      UIheaderWrapperMd.classList.add('header-md-colored');
    } else {
      UIheader.classList.remove('header-colored');
      UIheaderWrapperMd.classList.remove('header-md-colored');
    }
  });
}

$('.counter').counterUp();
const UIheaderMd = document.querySelector('.header-md');
const UIlines = document.querySelector('.lines');
const UIinsideUlA = document.querySelector('.md-inside-ul-A');
const UIdropA = document.querySelector('.drop-A');
function handleClickLines() {
  UIheaderMd.classList.toggle('toggle-header-md');
  UIlines.classList.toggle('toggle-lines');
}
function handleClickDropA(e) {
  UIinsideUlA.classList.toggle('toggle-md-inside-ul-A');
  e.preventDefault();
}
function handleClickDropB(e) {
  UIinsideUlB.classList.toggle('toggle-md-inside-ul-B');
  e.preventDefault();
}
if (document.querySelector('.visible-header-md')) {
  UIlines.addEventListener('click', handleClickLines);
}
if (document.querySelector('.drop-A')) {
  UIdropA.addEventListener('click', handleClickDropA);
}
