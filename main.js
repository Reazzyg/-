$(document).ready(function () {

$('.header-burger').on('click', function(){
  $('.header-menu-mobile').addClass('header-menu-mobile--active')
})
$('.header-menu-mobile-list-close').on('click', function(){
  $('.header-menu-mobile--active').removeClass('header-menu-mobile--active')
})


  $('a[href^="#"').on('click', function () {
    let href = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top,
    });
    return false;
  });

 // Получаем все элементы фильтра
  const filterItems = document.querySelectorAll('.filter__item');

  // Получаем все элементы портфолио
  const portfolioRows = document.querySelectorAll('.portfolio-row');

  // Устанавливаем активный раздел по умолчанию
  let activeFilter = 'doma';

  // Функция для обработки клика по элементу фильтра
  function handleFilterClick(event) {
    // Удаляем класс активного элемента у всех элементов фильтра
    filterItems.forEach(item => item.classList.remove('filter__item-active'));

    // Добавляем класс активного элемента к текущему элементу
    event.target.classList.add('filter__item-active');

    // Получаем значение атрибута data-target текущего элемента
    const target = event.target.getAttribute('data-target');

    // Показываем только выбранный раздел портфолио
    portfolioRows.forEach(row => {
      if (row.getAttribute('data') === target) {
        row.style.display = 'flex';
      } else {
        row.style.display = 'none';
      }
    });

    // Обновляем значение активного раздела
    activeFilter = target;
  }

  // Добавляем обработчик клика к каждому элементу фильтра
  filterItems.forEach(item => item.addEventListener('click', handleFilterClick));

  // Устанавливаем активный раздел по умолчанию
  filterItems.forEach(item => {
    if (item.getAttribute('data-target') === activeFilter) {
      item.classList.add('filter__item-active');
    }
  });

  // Показываем только выбранный раздел портфолио
  portfolioRows.forEach(row => {
    if (row.getAttribute('data') === activeFilter) {
      row.style.display = 'flex';
    } else {
      row.style.display = 'none';
    }
  });
  

  // const showMenu = (toggleId, navId) => {
  //   const toggle = document.getElementById(toggleId),
  //     nav = document.getElementById(navId);
  //   if (toggle && nav) {
  //     toggle.addEventListener('click', () => {
  //       nav.classList.toggle('show-menu');
  //     });
  //   }
  // };
  // showMenu('nav-toggle', 'nav-menu');

  // const navLink = document.querySelectorAll('.nav__link');

  // function linkAction() {
  //   const navMenu = document.getElementById('nav-menu');
  //   navMenu.classList.remove('show-menu');
  // }
  // navLink.forEach((n) => n.addEventListener('click', linkAction));

  // const sections = document.querySelectorAll('section[id]');

  // function scrollActive() {
  //   const scrollY = window.pageYOffset;

  //   sections.forEach((current) => {
  //     const sectionHeight = current.offsetHeight;
  //     const sectionTop = current.offsetTop;
  //     sectionId = current.getAttribute('id');
  //     if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
  //       document
  //         .querySelector('.nav__menu a[href*=' + sectionId + ']')
  //         .classList.add('active-link');
  //     } else {
  //       document
  //         .querySelector('.nav__menu a[href*=' + sectionId + ']')
  //         .classList.remove('active-link');
  //     }
  //   });
  // }
  // window.addEventListener('scroll', scrollActive);

  // function scrollHeader() {
  //   const header = document.getElementById('header');
  //   if (this.scrollY >= 200) header.classList.add('scroll-header');
  //   else header.classList.remove('scroll-header');
  // }
  // window.addEventListener('scroll', scrollHeader);

  // $('.scrolltop').click(function () {
  //   $('body,html').animate({ scrollTop: 0 }, 400);
  // });

  // function scrollTop() {
  //   const scrollTop = document.getElementById('scroll-top');
  //   if (this.scrollY >= 560) scrollTop.classList.add('show-scroll');
  //   else scrollTop.classList.remove('show-scroll');
  // }
  // window.addEventListener('scroll', scrollTop);

  // gsap.from('.home__img', { opacity: 0, duration: 2, delay: 0.5, x: 60 });
  // gsap.from('.home__data', { opacity: 0, duration: 2, delay: 0.8, y: 25 });
  // gsap.from('.home__greeting,.home__profession, .home__button', {
  //   opacity: 0,
  //   duration: 2,
  //   delay: 1,
  //   y: 25,
  //   ease: 'expo.out',
  //   stagger: 0.2,
  // });
  // gsap.from('.nav__logo,.nav__toggle', {
  //   opacity: 0,
  //   duration: 2,
  //   delay: 1.5,
  //   y: 25,
  //   ease: 'expo.out',
  //   stagger: 0.2,
  // });
  // gsap.from('.nav__item', {
  //   opacity: 0,
  //   duration: 2,
  //   delay: 1.8,
  //   y: 25,
  //   ease: 'expo.out',
  //   stagger: 0.2,
  // });
  // gsap.from('.home__social-icon', {
  //   opacity: 0,
  //   duration: 2,
  //   delay: 2.3,
  //   y: 25,
  //   ease: 'expo.out',
  //   stagger: 0.2,
  // });

  // var resize = $('#grade-img');
  // resize.on('click', function () {
  //   resize.toggleClass('qualification__img-resize');
  // });
  // var resizeOverlay = $('.qualification__overlay');
  // resize.on('click', function () {
  //   resizeOverlay.toggleClass('qualification__overlay-visible');
  // });
  // var resizeOverlay = $('.qualification__overlay');
  // resizeOverlay.on('click', function () {
  //   resize.removeClass('qualification__img-resize');
  //   resizeOverlay.removeClass('qualification__overlay-visible');
  // });
  // $(document).on('keydown', function (e) {
  //   if (e.keyCode == 27) {
  //     var resize = $('.qualification__img');
  //     var resizeOverlay = $('.qualification__overlay');
  //     resize.removeClass('qualification__img-resize');
  //     resizeOverlay.removeClass('qualification__overlay-visible');
  //   }
  // });
  // var modalButton = $('.button-modal');
  // var modalWindow = $('.modal');
  // var modalOverlay = $('.portfolio__overlay');
  // var closeButton = $('.modal__close');

  // modalButton.on('click', function (event) {
  //   var activeContent = $(this).attr('data-target');
  //   $(activeContent).addClass('modal-visible');
  //   modalOverlay.addClass('portfolio__overlay-visible');
  // });

  // closeButton.on('click', function () {
  //   modalWindow.removeClass('modal-visible');
  //   modalOverlay.removeClass('portfolio__overlay-visible');
  // });

  // modalOverlay.on('click', function () {
  //   modalWindow.removeClass('modal-visible');
  //   modalOverlay.removeClass('portfolio__overlay-visible');
  // });
  // $(document).on('keydown', function (e) {
  //   if (e.keyCode == 27) {
  //     modalWindow.removeClass('modal-visible');
  //     modalOverlay.removeClass('portfolio__overlay-visible');
  //   }
  // });
});
