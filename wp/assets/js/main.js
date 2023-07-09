$(document).ready(function () {


//==============Menu================================
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
  const tabs = document.querySelectorAll('.technology-tabs__item[data-target]');
  
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

//=======================Modal open=========================

// Получите все кнопки с классом "button projects-card__button"
const buttons = document.querySelectorAll('.button.projects-card__button');
const overlay = document.querySelector('.overlay');
const closeButton = document.querySelector('.projects-modal__close');
// Переберите все кнопки и добавьте обработчик события "click"
buttons.forEach((button) => {
  button.addEventListener('click', handleButtonClick);
});

// Обработчик события "click"
function handleButtonClick(event) {
  // Получите значение дата атрибута "data-target" у нажатой кнопки
  const target = event.target.dataset.target;

  // Откройте модальное окно с соответствующим дата атрибутом
  const modal = document.querySelector(`.projects-modal[data="${target}"]`);
  if (modal) {
    modal.style.opacity = '1';
    modal.style.zIndex = '999';
    overlay.style.display = 'block';

  }
}
// Получите элементы overlay и кнопку закрытия модального окна


// Получите все модальные окна
const modals = document.querySelectorAll('.projects-modal');

// Добавьте обработчики событий "click" на overlay и кнопку закрытия
overlay.addEventListener('click', handleCloseModal);
closeButton.addEventListener('click', handleCloseModal);

// Обработчик события "click" для закрытия модального окна
function handleCloseModal() {
  // Переберите все модальные окна и скройте их
  modals.forEach((modal) => {
    modal.style.opacity = '0';
    modal.style.zIndex = '-999';
    overlay.style.display = 'none';
  });
}

// ====================Фильтр в разделе Проекты===========================

const projectsFilterItems = document.querySelectorAll('.projects-filter__item');
let projectsActiveFilter = 'doma';
let cardDisplayCount = 3;
const breakpoint = 768;

function applyProjectsFilter(filter) {
  const projectsTypes = document.querySelectorAll('.projects-type');

  projectsTypes.forEach(type => {
    if (type.getAttribute('data') === filter) {
      type.style.display = 'flex';
    } else {
      type.style.display = 'none';
    }
  });

  const projectsCards = document.querySelectorAll('.projects-card');

  projectsCards.forEach((card, index) => {
    if (index < cardDisplayCount && card.closest('.projects-type').getAttribute('data') === filter) {
      card.style.display = 'flex';
    } else {
      card.style.display = 'none';
    }
  });

  projectsActiveFilter = filter;

  const loadMoreBtn = document.querySelector('.projects-load-more');
  loadMoreBtn.style.display = 'flex';
}

function showFirstProjectsCards() {
  const projectsTypes = document.querySelectorAll('.projects-type');

  projectsTypes.forEach(type => {
    const filter = type.getAttribute('data');
    const projectsCards = type.querySelectorAll('.projects-card');

    projectsCards.forEach((card, index) => {
      if (index < cardDisplayCount && filter === projectsActiveFilter) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  });
}

function updateCardDisplayCount() {
  cardDisplayCount = window.innerWidth < breakpoint ? 2 : 3;
  showFirstProjectsCards();
}

window.addEventListener('resize', updateCardDisplayCount);
updateCardDisplayCount(); // Показать соответствующее количество карточек при загрузке страницы

projectsFilterItems.forEach(item => item.addEventListener('click', function (event) {
  const target = event.target.getAttribute('data-target');
  projectsFilterItems.forEach(item => item.classList.remove('projects-filter__item-active'));
  event.target.classList.add('projects-filter__item-active');
  applyProjectsFilter(target);

  showFirstProjectsCards(); // Показать соответствующее количество карточек после смены вкладки фильтра
}));

applyProjectsFilter(projectsActiveFilter);

const projectsLoadMoreBtn = document.querySelector('.projects-load-more');
if (projectsLoadMoreBtn) {
  projectsLoadMoreBtn.addEventListener('click', function () {
    const hiddenCards = document.querySelectorAll('.projects-card:not([style="display: flex;"])');
    const cardsToLoad = Array.from(hiddenCards).filter(card => card.closest('.projects-type').getAttribute('data') === projectsActiveFilter).slice(0, cardDisplayCount);

    cardsToLoad.forEach(card => {
      card.style.display = 'flex';
    });

    const isLastCard = hiddenCards.length <= cardDisplayCount || cardsToLoad.length === 0;
    this.style.display = isLastCard ? 'none' : 'flex';
  });
}
//=======================modal==============

let modalButtons = document.querySelectorAll('.toggle-modal')
let modal = document.querySelector('.modal-form')
let modalOvelay = document.querySelector('.modal-overlay')
let modalCloseButton =document.querySelector('.modal-form__close')
modalButtons.forEach(button => button.addEventListener('click', function(){
  if(modal.style.display = modalOvelay.style.display = 'none'){
    modal.style.display = 'block'
    modalOvelay.style.display = 'block'
  }
  else{
    modal.style.display = 'none'
    modalOvelay.style.display = 'none'
  }
  modalCloseButton.addEventListener('click', function(){
    if(modal.style.display = modalOvelay.style.display = 'block'){
    modal.style.display = 'none'
    modalOvelay.style.display = 'none'
  }
  else{
    modal.style.display = 'none'
    modalOvelay.style.display = 'none'
  }
 
  })
   modalOvelay.addEventListener('click', function(){
    if(modal.style.display = modalOvelay.style.display = 'block'){
    modal.style.display = 'none'
    modalOvelay.style.display = 'none'
  }
  else{
    modal.style.display = 'none'
    modalOvelay.style.display = 'none'
  }
 
  })
}) )
});
