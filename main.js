$(document).ready(function () {

document.querySelector('.header-burger').addEventListener('click', function() {
document.querySelector('.header-menu-mobile').classList.add('header-menu-mobile--active');
});

document.querySelector('.header-menu-mobile-list-close').addEventListener('click', function() {
document.querySelector('.header-menu-mobile--active').classList.remove('header-menu-mobile--active');
});


  $('a[href^="#"').on('click', function () {
    let href = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top,
    });
    return false;
  });

// ====================Фильтр в разделе Наши работы===========================
  const filterItems = document.querySelectorAll('.filter__item');
let activeFilter = 'doma';

function applyFilter(filter) {
  const portfolioRows = document.querySelectorAll('.portfolio-row');
  const portfolioTypes = document.querySelectorAll(`.portfolio-type[data="${filter}"]`);

  portfolioRows.forEach((row, index) => {
    if (index === 0 && row.parentElement.getAttribute('data') === filter) {
      row.style.display = 'flex';
    } else {
      row.style.display = 'none';
    }
  });

  portfolioTypes.forEach(row => {
    if (row.getAttribute('data') === filter) {
      row.style.display = 'flex';
    } else {
      row.style.display = 'none';
    }
  });

  activeFilter = filter;

  const loadMoreBtn = document.querySelector('.load-more');
  loadMoreBtn.style.display = 'flex';
}

function showFirstRow() {
  const portfolioTypes = document.querySelectorAll('.portfolio-type');

  portfolioTypes.forEach(portfolioType => {
    const filter = portfolioType.getAttribute('data');
    const portfolioRows = portfolioType.querySelectorAll('.portfolio-row');
    const firstRow = portfolioRows[0];

    portfolioRows.forEach(row => {
      if (row === firstRow && filter === activeFilter) {
        row.style.display = 'flex';
      } else {
        row.style.display = 'none';
      }
    });
  });
}

filterItems.forEach(item => item.addEventListener('click', function(event) {
  const target = event.target.getAttribute('data-target');
  filterItems.forEach(item => item.classList.remove('filter__item-active'));
  event.target.classList.add('filter__item-active');
  applyFilter(target);

  showFirstRow(); // Показать первый ряд после смены вкладки фильтра
}));

applyFilter(activeFilter);
showFirstRow(); // Показать первый ряд при загрузке страницы

const loadMoreBtn = document.querySelector('.load-more');
if (loadMoreBtn) {
  loadMoreBtn.addEventListener('click', function() {
    const hiddenRows = document.querySelectorAll('.portfolio-row:not([style="display: flex;"])');
    const rowsToLoad = Array.from(hiddenRows).filter(row => row.parentElement.getAttribute('data') === activeFilter).slice(0, 1);

    rowsToLoad.forEach(row => {
      row.style.display = 'flex';
    });

    const isLastRow = hiddenRows.length <= 1 || rowsToLoad.length === 0;
    this.style.display = isLastRow ? 'none' : 'flex';
  });
}
// ===============Табы в разделе видов рубки================================


 // Получаем все элементы с атрибутом data-target
  const tabs = document.querySelectorAll('[data-target]');
  
  // Добавляем обработчик клика на каждый элемент
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.getAttribute('data-target');
      const images = document.querySelectorAll('.technology__img');
      const tabItems = document.querySelectorAll('.technology-tabs__item');
      
      images.forEach(image => {
        image.classList.remove('technology__img-active');
      });
      
      tabItems.forEach(item => {
        item.classList.remove('technology-tabs__item-active');
      });
      
      const targetImage = document.querySelector(`[data="${target}"]`);
      const targetTab = document.querySelector(`[data-target="${target}"]`);
      
      targetImage.classList.add('technology__img-active');
      targetTab.classList.add('technology-tabs__item-active');
    });
  });



//===============Валидация и стилизация кнопки при вводе данных=====================================

const nameInput = document.querySelector('.callback-form__input[type="text"]');
const phoneInput = document.querySelector('.callback-form__input[type="tel"]');
const emailInput = document.querySelector('.callback-form__input[type="email"]');
const button = document.querySelector('.callback-form__button');

const nameRegex = /^[\u0400-\u04FF]+$/; // Регулярное выражение для проверки имени на наличие только русских букв
const phoneRegex = /^\d+$/; // Регулярное выражение для проверки телефона на наличие только цифр
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Регулярное выражение для проверки почты на корректный формат и состояние только из английских символов

const nameError = document.querySelector('.callback-form__name-error');
const phoneError = document.querySelector('.callback-form__phone-error');
const emailError = document.querySelector('.callback-form__email-error');

function validateName() {
  if (!nameRegex.test(nameInput.value)) {
    nameError.textContent = 'Введите верное имя';
  } else {
    nameError.textContent = '';
  }
  updateButtonColor();
}

function validatePhone() {
  if (!phoneRegex.test(phoneInput.value)) {
    phoneError.textContent = 'Введите верный телефон';
  } else {
    phoneError.textContent = '';
  }
  updateButtonColor();
}

function validateEmail() {
  if (!emailRegex.test(emailInput.value)) {
    emailError.textContent = 'Введите верную почту';
  } else {
    emailError.textContent = '';
  }
  updateButtonColor();
}

function updateButtonColor() {
  const inputs = [nameInput, phoneInput, emailInput];
  const isAnyInvalid = inputs.some((input) => !input.checkValidity());
  const isAnyInputEmpty = inputs.some((input) => input.value === '');

  if (isAnyInvalid || isAnyInputEmpty) {
    button.classList.add('button-deactivated')
  } else {
    button.classList.remove('button-deactivated')
  }
}

nameInput.addEventListener('input', validateName);
phoneInput.addEventListener('input', validatePhone);
emailInput.addEventListener('input', validateEmail);

button.addEventListener('click', function(event) {
  if (!nameInput.checkValidity()) {
    event.preventDefault();
    nameError.textContent = 'Введите верное имя';
  }
  
  if (!phoneInput.checkValidity()) {
    event.preventDefault();
    phoneError.textContent = 'Введите верный телефон';
  }
  
  if (!emailInput.checkValidity()) {
    event.preventDefault();
    emailError.textContent = 'Введите верную почту';
  }
});
//====================3d================================
// Получите ссылку на контейнер
// Получите ссылку на контейнер
var container = document.getElementById('canvas-container');

// Создайте сцену
var scene = new THREE.Scene();

// Создайте камеру
var camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
camera.position.z = 5;

// Создайте рендерер
var renderer = new THREE.WebGLRenderer();
renderer.setSize(container.offsetWidth, container.offsetHeight);
container.appendChild(renderer.domElement);

// Загрузите модель
var loader = new THREE.GLTFLoader();
loader.load('3d/skull/scene.gltf', function (gltf) {
  var object = gltf.scene;
  scene.add(object);
});

// Определите функцию анимации
function animate() {
  requestAnimationFrame(animate);
  // Ваши изменения и анимации модели
  renderer.render(scene, camera);
}

// Запустите анимацию
animate();

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
