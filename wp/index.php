<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&family=Raleway:wght@700;800&display=swap"
    rel="stylesheet" />
  <?php wp_head();?>
  <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>

  <script type="importmap">
    {
    "imports": {
      "three": "https://unpkg.com/three@v0.154.0/build/three.module.js",
      "OrbitControls": "https://unpkg.com/three@v0.154.0/examples/jsm/controls/OrbitControls.js",
      "GLTFLoader": "https://unpkg.com/three@v0.154.0/examples/jsm/loaders/GLTFLoader.js",
      "OBJLoader": "https://unpkg.com/three@v0.154.0/examples/jsm/loaders/OBJLoader.js",
      "RGBELoader": "https://unpkg.com/three@v0.154.0/examples/jsm/loaders/RGBELoader.js",
      "MTLLoader": "https://unpkg.com/three@v0.154.0/examples/jsm/loaders/MTLLoader.js"
    }
  }
</script>
  <title>ДСК Калевала - строим дома из Кело</title>
</head>

<body>
  <header class="header">
    <div class="container header-container">
      <a href="#"> <img src="img/logo.svg" alt="ДСК Калевала логотип" class="header-logo" /></a>
      <!-- /.header-logo -->
      <nav class="header-menu">
        <ul class="header-menu-list">
          <li class="header-menu-list__item"><a href="#about" class="header-menu-list__link">О нас</a></li>
          <li class="header-menu-list__item"><a href="#portfolio" class="header-menu-list__link">Готовые объекты</a>
          </li>
          <li class="header-menu-list__item"><a href="#children" class="header-menu-list__link">О кело</a></li>
          <li class="header-menu-list__item"><a href="#technology" class="header-menu-list__link">Технология</a></li>
          <li class="header-menu-list__item"><a href="#projects" class="header-menu-list__link">Проекты</a></li>
          <li class="header-menu-list__item">
            <a href="#contacts" class="header-menu-list__link header-menu-list__link-active">Контакты</a>
          </li>
        </ul>
        <div class="header-social">
          <a href="" class="header-social__icon"><img src="img/whatsapp.svg" alt="" class="icon" /></a>
          <a href="" class="header-social__icon"><img src="img/vk.svg" alt="" class="icon" /></a>
          <a href="tel:89814009745" class="header-social__link">+7 (981) 400-07-45</a>
        </div>
        <!-- /.header-social -->
      </nav>
      <!-- /.header-menu -->

      <button class="header-burger">
        <img src="img/burger.svg" alt="">
      </button>

      <nav class="header-menu-mobile">
        <div class="header-menu-mobile__overlay"></div>
        <ul class="header-menu-mobile-list">
          <li class="header-menu-mobile-list__item"><a href="#about" class="header-menu-list__link">О нас</a></li>
          <li class="header-menu-mobile-list__item"><a href="#portfolio" class="header-menu-list__link">Готовые
              объекты</a></li>
          <li class="header-menu-mobile-list__item"><a href="#children" class="header-menu-list__link">О кело</a></li>
          <li class="header-menu-mobile-list__item"><a href="#technology" class="header-menu-list__link">Технология</a>
          </li>
          <li class="header-menu-mobile-list__item"><a href="#projects" class="header-menu-list__link">Проекты</a></li>
          <li class="header-menu-mobile-list__item"><a href="#contanct"
              class="header-menu-list__link header-menu-list__link-active">Контакты</a></li>
          <button class="header-menu-mobile-list-close">
            <img src="img/close-white.svg" alt="">
          </button>
          <div class="header-social header-social-mobile">
            <div class="header-social-mobile-wrapper">
              <a href="" class="header-social__icon"><img src="img/whatsapp.svg" alt="" class="icon" /></a>
              <a href="" class="header-social__icon"><img src="img/vk.svg" alt="" class="icon" /></a>
            </div>
            <a href="tel:89814009745" class="header-social__link">+7 (981) 400-07-45</a>
          </div>
          <!-- /.header-social -->
        </ul>
      </nav>
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->
  <main>
    <section class="hero">
      <div class="container hero-container">
        <div class="hero-left">
          <h1 class="hero-title">Строим эксклюзивные объекты из <span class="hero-title__accent">сосны Кело</span> на
            своем производстве</h1>
          <p class="hero-subtitle">Выполняем все виды работ—от ландшафта до внутренней отделки</p>
          <a href="#projects" class="button">Подобрать макет</a>
          <div class="hero-advantages">
            <div class="hero-advantages-item">
              <img src="img/axe.svg" alt="" class="icon" />
              <p>Построили более 100 объектов</p>
            </div>
            <div class="hero-advantages-item">
              <img src="img/star.svg" alt="" class="icon" />
              <p>Ни одного обращения по гарантии</p>
            </div>
          </div>
          <!-- /.hero-advantages -->
        </div>
        <!-- /.hero-left -->
        <div class="hero-right">
          <div class="hero-right-overlay"></div>
          <div class="hero-right-overlay-big"></div>
          <div class="hero-right-overlay-circle"></div>
          <div class="hero-right-wrapper">
            <div class="hero-advantages hero-right-advantages">
              <div class="hero-advantages-item">
                <p>Полный цикл произодства</p>
              </div>
              <div class="hero-advantages-item">
                <p>Строим под ключ</p>
              </div>
            </div>
            <!-- /.hero-advantages -->
            <div class="hero-advantages hero-right-advantages">
              <div class="hero-advantages-item">
                <p>Гарантия до 25 лет</p>
              </div>
              <div class="hero-advantages-item">
                <p>Заготовка леса через «ЕГАИС ЛЕС»</p>
              </div>
            </div>
            <!-- /.hero-advantages -->
          </div>
          <!-- /.hero-right-wrapper -->
        </div>
        <!-- /.hero-right -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->

    <section class="hero-advantages-mobile">
      <div class="container hero-advantages-mobile-container">
        <div class="hero-advantages hero-right-advantages">
          <div class="hero-advantages-item">
            <p>Полный цикл произодства</p>
          </div>
          <div class="hero-advantages-item">
            <p>Строим под ключ</p>
          </div>
        </div>
        <!-- /.hero-advantages -->
        <div class="hero-advantages hero-right-advantages">
          <div class="hero-advantages-item">
            <p>Гарантия до 25 лет</p>
          </div>
          <div class="hero-advantages-item">
            <p>Заготовка леса через «ЕГАИС ЛЕС»</p>
          </div>
        </div>
        <!-- /.hero-advantages -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero-advantages-mobile -->

    <section id="about" class="about">
      <div class="container about-container">
        <img src="img/about.jpg" alt="" class="about__img" />
        <div class="about-wrapper">
          <h2 class="about__title">О нас</h2>
          <p>Мы строим дома, турбазы, коттеджи, беседки, бани на основе сруба из сырой Карельской древесины и из
            сухостойной сосны «Kelo» Каждый наш проект является уникальным именно благодаря индивидуальному подходу к
            каждому клиенту.</p>
          <p>Каждый клиент заслуживает самых высоких стандартов качества и профессионализма, поэтому мы используем
            только самые лучшие материалы и технологии.</p>
          <p>Предлагаем нашим заказчикам свободный доступ к производственной площадке, чтобы они могли наблюдать за
            процессом создания своего будущего дома или бани и убедиться в качестве работы наших специалистов.</p>
        </div>
        <!-- /.about-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.about -->

    <section id="portfolio" class="portfolio">
      <div class="container portfolio-container">
        <div class="portfolio-top">
          <h2 class="portfolio-title">Некоторые наши работы</h2>
          <div class="filter">
            <p data-target="doma" class="filter__item filter__item-active">дома</p>
            <p data-target="bani" class="filter__item">бани</p>
            <p data-target="besedki" class="filter__item">беседки</p>
            <p data-target="turbazi" class="filter__item">турбазы</p>
          </div>
          <!-- ./filiter -->
        </div>
        <!-- /.potrfolio-top -->
        <div data="doma" class="portfolio-type">
          <div class="portfolio-row">
            <div class="portfolio-card">
              <img src="img/1.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->

            <div class="portfolio-little">
              <div class="portfolio-card">
                <img src="img/2.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
              <div class="portfolio-card">
                <img src="img/3.png" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
            </div>
            <!-- /.portfolio-little -->

            <!-- /.portfolio-card -->
            <div class="portfolio-card">
              <img src="img/4.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->
          </div>
          <!-- /.portfolio-row -->
          <div class="portfolio-row">
            <div class="portfolio-card">
              <img src="img/1.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->

            <div class="portfolio-little">
              <div class="portfolio-card">
                <img src="img/2.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
              <div class="portfolio-card">
                <img src="img/3.png" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
            </div>
            <!-- /.portfolio-little -->

            <!-- /.portfolio-card -->
            <div class="portfolio-card">
              <img src="img/4.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->
          </div>
          <!-- /.portfolio-row -->
          <div class="portfolio-row">
            <div class="portfolio-card">
              <img src="img/1.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->

            <div class="portfolio-little">
              <div class="portfolio-card">
                <img src="img/2.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
              <div class="portfolio-card">
                <img src="img/3.png" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
            </div>
            <!-- /.portfolio-little -->

            <!-- /.portfolio-card -->
            <div class="portfolio-card">
              <img src="img/4.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->
          </div>
          <!-- /.portfolio-row -->
        </div>
        <!-- /.portfolio-type -->

        <div data="bani" class="portfolio-type">
          <div class="portfolio-row">
            <div class="portfolio-card">
              <img src="img/3.png" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->

            <div class="portfolio-little">
              <div class="portfolio-card">
                <img src="img/1.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
              <div class="portfolio-card">
                <img src="img/2.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
            </div>
            <!-- /.portfolio-little -->

            <!-- /.portfolio-card -->
            <div class="portfolio-card">
              <img src="img/4.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->
          </div>
          <!-- /.portfolio-row -->
          <div class="portfolio-row">
            <div class="portfolio-card">
              <img src="img/3.png" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->

            <div class="portfolio-little">
              <div class="portfolio-card">
                <img src="img/1.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
              <div class="portfolio-card">
                <img src="img/2.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
            </div>
            <!-- /.portfolio-little -->

            <!-- /.portfolio-card -->
            <div class="portfolio-card">
              <img src="img/4.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->
          </div>
          <!-- /.portfolio-row -->
        </div>

        <div data="besedki" class="portfolio-type">
          <div class="portfolio-row">
            <div class="portfolio-card">
              <img src="img/4.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->

            <div class="portfolio-little">
              <div class="portfolio-card">
                <img src="img/3.png" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
              <div class="portfolio-card">
                <img src="img/2.jpg" alt="" class="portfolio-card__img" />
                <div class="portfolio-card-description">
                  <p class="portfolio-card-description__name">Дом арктика</p>
                  <div class="portfolio-card-description-bottom">
                    <div class="portfolio-card-description-wrapper">
                      <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">30 м2</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->

                    <div class="portfolio-card-description-wrapper">
                      <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                      <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.portfolio-card-description-wrapper -->
                  </div>
                  <!-- /.portfolio-card-description-bottom -->
                </div>
                <!-- /.portfolio-card-description -->
              </div>
              <!-- /.portfolio-card -->
            </div>
            <!-- /.portfolio-little -->

            <!-- /.portfolio-card -->
            <div class="portfolio-card">
              <img src="img/1.jpg" alt="" class="portfolio-card__img" />
              <div class="portfolio-card-description">
                <p class="portfolio-card-description__name">Дом арктика</p>
                <div class="portfolio-card-description-bottom">
                  <div class="portfolio-card-description-wrapper">
                    <img src="img/meters.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">30 м2</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->

                  <div class="portfolio-card-description-wrapper">
                    <img src="img/money.svg" alt="" class="portfolio-card-description__img" />
                    <span class="portfolio-card-description__info">от 499 тыс. рублей</span>
                  </div>
                  <!-- /.portfolio-card-description-wrapper -->
                </div>
                <!-- /.portfolio-card-description-bottom -->
              </div>
              <!-- /.portfolio-card-description -->
            </div>
            <!-- /.portfolio-card -->
          </div>
          <!-- /.portfolio-row -->
        </div>
        <!-- /.portfolio-type -->
        <div class="load-more">
          <button class="button button-outline">Больше проектов<img src="img/reboot.svg" button__img"></button>
        </div>
        <!-- /.load-more -->
      </div>
      <!-- /.container-portfolio-container -->
    </section>
    <!-- /.portfolio -->

    <section class="why">
      <div class="why__overlay"></div>
      <div class="container why-container">
        <h2 class="why-title">Почему выбирают именно нас</h2>
        <div class="why-wrapper">
          <div class="why-card">
            <h3 class="why-card__title">гарантия</h3>
            <p class="why-card__subtitle">За все время существования к нам не обратился ни один заказчик</p>
          </div>
          <div class="why-card">
            <h3 class="why-card__title">индивидуальный подход</h3>
            <p class="why-card__subtitle">Вы можете в любой момент внести изменения в проект</p>
          </div>
          <div class="why-card">
            <h3 class="why-card__title">все работы под ключ</h3>
            <p class="why-card__subtitle">Ландшафт, фундамент, внутренняя отделка, мебель</p>
          </div>
          <div class="why-card">
            <h3 class="why-card__title">эксклюзивность</h3>
            <p class="why-card__subtitle">Полностью ручная работа, что обеспечивает 100% уникальность</p>
          </div>
          <div class="why-card">
            <h3 class="why-card__title">этапность</h3>
            <p class="why-card__subtitle">Мы не приступаем к следующему этапу работ пока не согласуем предыдущий</p>
          </div>
        </div>
        <!-- /.why-wrapper -->
      </div>
      <!-- /.container why-container -->
    </section>
    <!-- /.why -->

    <section id="children" class="children">
      <div class="container children-container">
        <div class="children-top">
          <h2 class="children-title">Дом, в котором будут жить ваши правнуки</h2>
          <p class="children-subtitle">В наших проектах мы используем лично отобранную Карельскую сухостойную
            сосну–Кело. Мы следим, чтобы каждое бревно было наилучшего качества.</p>
        </div>
        <!-- /.children-top -->
        <div class="children-wrapper">
          <img src="img/kelo-logo.png" alt="" class="children__img" />
          <ul class="children-list">
            <li class="children-list__item">
              Низкий процент усадки
              <p>Можно сразу заезжать не дожидаясь усадки</p>
            </li>
            <li class="children-list__item">
              Срок службы 300 лет
              <p>И это не предел. За счет природных свойств Кело не подвержено гниению</p>
            </li>
            <li class="children-list__item">
              Природная красота
              <p>Дом не требует отделки</p>
            </li>
            <li class="children-list__item">
              Высокая энергоэффективность
              <p>Кело хорошо сохраняет тепло</p>
            </li>
          </ul>
        </div>
        <!-- /.children-wrapper -->
      </div>
      <!-- /.container children-container -->
    </section>
    <!-- /.children -->

    <section id="technology" class="technology">
      <div class="technology-top">
        <h2 class="technology-title technology-title-mobile">Технология</h2>
        <p class="technology-subtitle technology-subtitle-mobile">Мы строим дома по традиционным технологиям: Post &
          Beam, Лафет, Канадская рубка, Русская чаша, Рубка в лапу, Обратная чаша. Мы соблюдаем высокие стандарты
          производства и строительства. Никаких щелей и трещин — подгонка поверхностей друг к другу не более 4-5
          миллиметров.</p>
      </div>
      <!-- /.technology-top-mobile -->
      <div class="container technology-container">
        <div data="post" class="technology__img">
          <img src="img/technology.jpg" alt="" class="" />
        </div>
        <div data="lafet" class="technology__img">
          <img src="img/technology.jpg" alt="" class="" />
        </div>
        <div data="canada" class="technology__img">
          <img src="img/technology.jpg" alt="" class="" />
        </div>
        <div data="chasha" class="technology__img technology__img-active">
          <img src="img/why-us.jpg" alt="" class="" />
        </div>
        <div data="lapa" class="technology__img">
          <img src="img/wood.jpg" alt="" class="" />
        </div>
        <div data="obrat" class="technology__img">
          <img src="img/technology.jpg" alt="" class="" />
        </div>
        <!-- <img data="lafet" src="img/technology.jpg" alt="" class="technology__img">
        <img data="canada" src="img/wood.jpg" alt="" class="technology__img">
        <img data="chasha" src="img/technology.jpg" alt="" class="technology__img ">
        <img data="lapa" src="img/why-us.jpg" alt="" class="technology__img">
        <img data="obrat" src="img/technology.jpg" alt="" class="technology__img"> -->
        <div class="technology-wrapper">
          <h2 class="technology-title">Технология</h2>
          <p class="technology-subtitle">Мы строим дома по традиционным технологиям: Post & Beam, Лафет, Канадская
            рубка, Русская чаша, Рубка в лапу, Обратная чаша. Мы соблюдаем высокие стандарты производства и
            строительства. Никаких щелей и трещин — подгонка поверхностей друг к другу не более 4-5 миллиметров.</p>
          <div class="technology-tabs">
            <p data-target="post" class="technology-tabs__item">Post & Beam <img src="img/arrow.svg" alt=""
                class="technology-tabs__arrow" /></p>
            <p data-target="lafet" class="technology-tabs__item">Лафет <img src="img/arrow.svg" alt=""
                class="technology-tabs__arrow" /></p>
            <p data-target="canada" class="technology-tabs__item">Канадская рубка <img src="img/arrow.svg" alt=""
                class="technology-tabs__arrow" /></p>
            <p data-target="chasha" class="technology-tabs__item technology-tabs__item-active">Русская чаша <img
                src="img/arrow.svg" alt="" class="technology-tabs__arrow" /></p>
            <p data-target="lapa" class="technology-tabs__item">Рубка в лапу <img src="img/arrow.svg" alt=""
                class="technology-tabs__arrow" /></p>
            <p data-target="obrat" class="technology-tabs__item">Обратная чаша <img src="img/arrow.svg" alt=""
                class="technology-tabs__arrow" /></p>
          </div>
        </div>
        <!-- /.technology-wrapper -->
      </div>
      <!-- /.container technology-container -->
    </section>
    <!-- /.technology -->

    <section class="callback">
      <div class="callback-overlay"></div>
      <div class="callback-circle"></div>
      <div class="container callback-container">
        <div class="callback-text">
          <h2 class="callback-title">Если у Вас нет проекта, Вы можете заказать его у нас</h2>
          <p class="callback-subtitle">У нас в штате работают профессиональные кровельщики, плотники-рубщики,
            плотники-отделочники, монолитчики.</p>
          <p class="callback-subtitle">Наши штатные проектировщики регулярно создают проекты, которые мы реализуем для
            последующей продажи.</p>
        </div>
        <!-- /.callback-text -->

        <form action="" class="form callback-form">
          <h2 class="callback-form__title">Узнайте стоимость проекта</h2>
          <p class="callback-form__name-error"></p>
          <input type="text" placeholder="* Ваше имя" class="input callback-form__input" />
          <p class="callback-form__phone-error"></p>
          <input type="tel" placeholder="* Номер телефона" class="input callback-form__input" />
          <p class="callback-form__email-error"></p>
          <input type="email" placeholder="E-mail для получения ответа" class="input callback-form__input" />
          <button class="button callback-form__button">Позвоните мне</button>
          <p class="policy callback-form__policy">
            * Поля обязательны для заполнения. Нажимая кнопку, вы соглашаетесь с
            <a class="callback-form__link" href="policy.html">политикой конфеденциальности</a>
          </p>
        </form>
      </div>
      <!-- /.container callback-container -->
    </section>
    <!-- /.callback -->

    <div id="projects" class="projects">
      <div class="container projects-container">
        <div class="projects-top">
          <div class="projects-top-wrapper">
            <h2 class="projects-title">Проекты</h2>
            <p class="project subtitle">Мы располагаем большой базой проектов, выполненных штатными дизайнерами</p>
          </div>
          <!-- /.portfolio-top-wrapper -->
          <div class="filter projects-filter">
            <p data-target="doma" class="projects-filter__item projects-filter__item-active">дома</p>
            <p data-target="bani" class="projects-filter__item">бани</p>
            <p data-target="besedki" class="projects-filter__item">беседки</p>
            <p data-target="turbazi" class="projects-filter__item">турбазы</p>
          </div>
          <!-- ./filiter -->
        </div>
        <!-- /.projects-top -->

        <div class="projects-wrapper">
          <div data="doma" class="projects-type">
            <div class="projects-row">
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->

              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->

              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
              <div class="projects-card">
                <img src="img/orenburg/front.jpg" alt="" class="projects-card__img" />
                <div class="projects-card-description">
                  <p class="projects-card-description__name">Дом оренбург</p>
                  <div class="projects-card-description-bottom">
                    <div class="projects-card-description-wrapper">
                      <img src="img/meters-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">30 м2</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->

                    <div class="projects-card-description-wrapper">
                      <img src="img/money-black.svg" alt="" class="projects-card-description__img" />
                      <span class="projects-card-description__info">от 499 тыс. рублей</span>
                    </div>
                    <!-- /.projects-card-description-wrapper -->
                  </div>
                  <!-- /.projects-card-description-bottom -->
                  <div data-target="orenburg" class="button button projects-card__button">Подробнее</div>
                </div>
                <!-- /.projects-card-description -->
              </div>
              <!-- /.projects-card -->
            </div>
            <!-- /.projects-row -->
          </div>
          <!-- /.projects-type -->
        </div>
        <!-- ./projects-wrapepr -->
        <div data="orenburg" class="projects-modal">
          <img src="img/close.svg" alt="" class="projects-modal__close">
          <div class="projects-modal-wrapper">
            <div class="projects-modal-visual">
              <div class="projects-slider">

                <div class="swiper swiper-projects mySwiper2">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-projects-slide swiper-projects-slide">
                      <img src="img/orenburg/front.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-slide">
                      <img src="img/orenburg/1.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-slide">
                      <img src="img/orenburg/3.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-slide">
                      <img src="img/orenburg/4.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-slide">
                      <img src="img/orenburg/1-plan.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-slide">
                      <img src="img/orenburg/2-plan.jpg" />
                    </div>
                  </div>
                  <div class="swiper-projects-button-next">
                    <img src="img/arrow-foreward.svg" alt="">
                  </div>
                  <div class="swiper-projects-button-prev">
                    <img src="img/arrow-back.svg" alt="">
                  </div>
                </div>
                <div thumbsSlider="" class="swiper swiper-projects-bottom">
                  <div class="swiper-projects-bottom-overlay"></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-projects-bottom-slide">
                      <img src="img/orenburg/front.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-bottom-slide">
                      <img src="img/orenburg/1.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-bottom-slide">
                      <img src="img/orenburg/3.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-bottom-slide">
                      <img src="img/orenburg/4.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-bottom-slide">
                      <img src="img/orenburg/1-plan.jpg" />
                    </div>
                    <div class="swiper-slide swiper-projects-bottom-slide">
                      <img src="img/orenburg/2-plan.jpg" />
                    </div>
                  </div>
                </div>


              </div>
              <!-- /.projects-slider -->
              <div class="projects-obs">
                <div id="canvas-container"></div>
              </div>
              <!-- /.projects-3d -->
            </div>
            <!-- /.projects-modal-visual -->
            <div class="projects-modal-text">
              <div class="projects-modal-info">
                <h3 class="projects-modal-info__title">дом оренбург</h3>

                <div class="projects-modal-info-block projects-modal-info-block-area-all">
                  <div class="projects-modal-info-block-wrapper">
                    <img src="img/meters-orange.svg" alt="" class="projects-modal-info-block__img" />
                    <p class="projects-modal-info-block__num">114,7 м2</p>
                  </div>
                  <!-- /.projects-modal-info-block-wrapper -->
                  <p class="projects-modal-info-block__text">общая площадь</p>
                </div>
                <!-- ./projects-modal-info-block -->

                <div class="projects-modal-info-block projects-modal-info-block-area">
                  <div class="projects-modal-info-block-wrapper">
                    <p class="projects-modal-info-block__num">60 м2</p>
                  </div>
                  <p class="projects-modal-info-block__text">площадь помещений</p>
                </div>
                <!-- ./projects-modal-info-block -->

                <div class="projects-modal-info-block projects-modal-info-block-floors">
                  <div class="projects-modal-info-block-wrapper">
                    <img src="img/floor-orange.svg" alt="" class="projects-modal-info-block__img" />
                    <p class="projects-modal-info-block__num">2</p>
                  </div>
                  <p class="projects-modal-info-block__text">этажей</p>
                </div>
                <!-- ./projects-modal-info-block -->

                <div class="projects-modal-info-block projects-modal-info-block-time">
                  <div class="projects-modal-info-block-wrapper">
                    <img src="img/time-orange.svg" alt="" class="projects-modal-info-block__img" />
                    <p class="projects-modal-info-block__num">1-2 мес</p>
                  </div>
                  <p class="projects-modal-info-block__text">срок строительства</p>
                </div>
                <!-- ./projects-modal-info-block -->

                <div class="projects-modal-info-block projects-modal-info-block-guarantees">
                  <div class="projects-modal-info-block-wrapper">
                    <img src="img/guarantee-orange.svg" alt="" class="projects-modal-info-block__img" />
                    <p class="projects-modal-info-block__num">30 лет</p>
                  </div>
                  <p class="projects-modal-info-block__text">гарантия</p>
                </div>
                <!-- ./projects-modal-info-block -->
                <button class="button button button-outline projects-modal__button toggle-modal">Хочу такой же</button>
              </div>
              <!-- /.projects-modal-info -->
              <div class="projects-modal__description">
                <div class="projects-modal__description-fade"></div>
                <p>
                  Сруб Оренбург–это дом из сосны Кело, который идеально подойдет для
                  постоянного проживания или отдыха на выходных. Он состоит из двух этажей, с просторной гостиной,
                  кухней,
                  спальней и ванной комнатой на первом этаже, и панорамным остеклением на втором этаже. Сруб выполнен из
                  экологически чистого материала, что делает его красивым и безопасным для здоровья. В нем есть все
                  необходимые удобства для комфортного проживания и уютный интерьер, который создает атмосферу тепла и
                  уюта. Если вы хотите насладиться жизнью на природе в уютном доме, то сруб Оренбург - это то, что вам
                  нужно.Сруб Оренбург–это дом из сосны Кело, который идеально подойдет для
                  постоянного проживания или отдыха на выходных. Он состоит из двух этажей, с просторной гостиной,
                  кухней,
                  спальней и ванной комнатой на первом этаже, и панорамным остеклением на втором этаже. Сруб выполнен из
                  экологически чистого материала, что делает его красивым и безопасным для здоровья. В нем есть все
                  необходимые удобства для комфортного проживания и уютный интерьер, который создает атмосферу тепла и
                  уюта. Если вы хотите насладиться жизнью на природе в уютном доме, то сруб Оренбург - это то, что вам
                  нужно.Сруб Оренбург–это дом из сосны Кело, который идеально подойдет для
                  постоянного проживания или отдыха на выходных. Он состоит из двух этажей, с просторной гостиной,
                  кухней,
                  спальней и ванной комнатой на первом этаже, и панорамным остеклением на втором этаже. Сруб выполнен из
                  экологически чистого материала, что делает его красивым и безопасным для здоровья. В нем есть все
                  необходимые удобства для комфортного проживания и уютный интерьер, который создает атмосферу тепла и
                  уюта. Если вы хотите насладиться жизнью на природе в уютном доме, то сруб Оренбург - это то, что вам
                  нужно.Сруб Оренбург–это дом из сосны Кело, который идеально подойдет для
                  постоянного проживания или отдыха на выходных. Он состоит из двух этажей, с просторной гостиной,
                  кухней,
                  спальней и ванной комнатой на первом этаже, и панорамным остеклением на втором этаже. Сруб выполнен из
                  экологически чистого материала, что делает его красивым и безопасным для здоровья. В нем есть все
                  необходимые удобства для комфортного проживания и уютный интерьер, который создает атмосферу тепла и
                  уюта. Если вы хотите насладиться жизнью на природе в уютном доме, то сруб Оренбург - это то, что вам
                  нужно.
                </p>
              </div>
            </div>
            <!-- /.projects-modal-text -->
          </div>
          <!-- /.projeats-modal-wrapper -->
        </div>
        <!-- /.projects-modal -->
        <div class="projects-load-more">
          <button class="button button-outline">Больше проектов<img src="img/reboot.svg" button__img"></button>
        </div>
        <!-- /.load-more -->
      </div>
      <!-- /.container projects-container -->
    </div>
    <!-- /.projects -->

    <section class="work">
      <div class="container work-container">
        <h2 class="work-title">Порядок работы</h2>

        <div class="work-card">
          <img src="img/work1.jpg" alt="" class="work-card__img">
          <ul class="work-card-list">
            <li class="work-card-list__item">Вы оставляете заявку и мы связываемся с Вами</li>
            <li class="work-card-list__item">Определяем ключевые параметры: диаметр бревна, площадь объекта, сроки, цены
            </li>
          </ul>
        </div>
        <!-- /.work-card -->

        <div class="work-card work-card-reverse">
          <img src="img/work2.jpg" alt="" class="work-card__img">
          <ul class="work-card-list">
            <li class="work-card-list__item">Уточняем требуются ли допольнительные работы по установке фундамента,
              ландашафтные работы, отделочные работы</li>
            <li class="work-card-list__item">Выбор эскизных решений. Ваш проект или мы проектируем.
            </li>
          </ul>
        </div>
        <!-- /.work-card -->

        <div class="work-card">
          <img src="img/work3.jpg" alt="" class="work-card__img">
          <ul class="work-card-list">
            <li class="work-card-list__item">Закупка леса, доставка его на площадку и сдача материала заказчику</li>
            <li class="work-card-list__item">Рубка согласно проекту
            </li>
            <li class="work-card-list__item">Разборка, доставка сруба и монтаж
            </li>
            <li class="work-card-list__item">Сдача готовой рубки
            </li>
          </ul>
        </div>
        <!-- /.work-card -->
      </div>
      <!-- /.container work-container -->
    </section>
    <!-- /.work -->


    <section class="furn">
      <div class="container furn-container">
        <h2 class="title furn-title">Мебельное производство</h2>
        <p class="subtitle furn-subtitle">Мы создаем дизайнерскую мебель на заказ, предлагаем нашим клинентам обустроить
          свой дом уникальной и неповторимой мебелью нашего производства</p>

        <!-- Slider main container -->
        <div class="swiper swiper-furn">
          <!-- <div class="swiper-overlay"></div> -->
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide swiper-furn-slide">
              <img src="img/slide1.jpg" alt="" class="swiper-furn-slide__img">
            </div>
            <div class="swiper-slide swiper-furn-slide">
              <img src="img/slide2.jpg" alt="" class="swiper-furn-slide__img">
            </div>
            <div class="swiper-slide swiper-furn-slide">
              <img src="img/slide2.jpg" alt="" class="swiper-furn-slide__img">
            </div>
            <div class="swiper-slide swiper-furn-slide">
              <img src="img/slide2.jpg" alt="" class="swiper-furn-slide__img">
            </div>
            <div class="swiper-slide swiper-furn-slide">
              <img src="img/slide2.jpg" alt="" class="swiper-furn-slide__img">
            </div>
            <div class="swiper-slide swiper-furn-slide">
              <img src="img/slide2.jpg" alt="" class="swiper-furn-slide__img">
            </div>

          </div>
          <!-- If we need navigation buttons -->
          <!-- <div class="swiper-button-prev"></div> -->
          <div class="work-swiper-button-next "></div>
        </div>
        <!--/. swiper  -->

      </div>
    </section>
    <!-- /.furn -->

    <section id="contacts" class="adress">
      <div class="container adress-container">
        <h2 class="title adress-title">Производство расположено в Республике Карелия</h2>
        <div class="adress-wrapper">
          <div class="adress-info-wrapper">

            <div class="adress-info">
              <h3 class="adress-info__title"> <img src="img/bullet.svg" alt="" class="adress-info__icon">Офис продаж:
              </h3>
              <p class="adress-info__text">ООО «ДСК Калевала»г. Петрозаводск; ул. Ригачина, 64а</p>
              <a href="mailto:dck.kalevala21@mail.ru" class="adress-info__link">dck.kalevala21@mail.ru</a>
              <a href="tel:+7 (981) 400 07 45" class="adress-info__link">+7 (981) 400 07 45</a>
              <a href="tel:+7 (963) 749 49 63" class="adress-info__link">+7 (963) 749 49 63</a>

            </div>
            <!-- /.adress-info -->
            <div class="adress-info">
              <h3 class="adress-info__title"> <img src="img/bullet.svg" alt="" class="adress-info__icon">Производство:
              </h3>
              <p class="adress-info__text">г. Петрозаводск, ул. Кооперативная, 8/3</p>
            </div>
            <!-- /.adress-info -->
            <div class="adress-info-socials">
              <a href="" class="adress-info-socials__link">
                <img src="img/whatsapp.svg" alt="" class="adress-info-socials__icon"></a>
              <a href="" class="adress-info-socials__link">
                <img src="img/vk.svg" alt="" class="adress-info-socials__icon"></a>
            </div>
            <!-- /.adress-info-socials -->
          </div>
          <!-- /.adress-info-wrapper -->
          <div class="adress-map">
            <iframe src="https://snazzymaps.com/embed/505630" width="100%" height="100%" style="border:none;"></iframe>
          </div>
          <!-- /.adress-map -->
        </div>
        <!-- /.adress-wrapper -->
      </div>
      <!-- /.container adress-container -->
    </section>
    <!-- /.adress -->


  </main>
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-block">
        <p class="footer__text">ООО «ДСК Калевала»</p>
        <p class="footer__text-light">©2023. KeloSrub</p>
      </div>
      <!-- /.footer-block -->
      <nav class="footer-block footer-nav">
        <ul class="footer-list">
          <li class="footer-list-item"><a href="#about" class="footer-list-item__link">О нас</a></li>
          <li class="footer-list-item"><a href="#children" class="footer-list-item__link">О кело</a></li>
          <li class="footer-list-item"><a href="#technology" class="footer-list-item__link">Технология</a></li>
          <li class="footer-list-item"><a href="#projects" class="footer-list-item__link">Проекты</a></li>
          <li class="footer-list-item"><a href="#portfolio" class="footer-list-item__link">Готовые объекты</a></li>
          <li class="footer-list-item"><a href="#contacts" class="footer-list-item__link">Контакты</a></li>
        </ul>
        <a href="policy.html" class="policy footer__text-light">Политика конфиденциальности</a>
      </nav>
      <!-- /.footer-block -->

      <div class="footer-block footer-socials">
        <a href="" class="footer-socials__link">
          <img src="img/whatsapp.svg" alt="" class="footer-socials__icon"></a>
        <a href="" class="footer-socials__link">
          <img src="img/vk.svg" alt="" class="footer-socials__icon"></a>
        <a href="tel:+7 (981) 400-07-45" class="footer-socials__link">+7 (981) 400-07-45
        </a>
      </div>
      <!-- /.footer-block -->
    </div>
    <!-- /.container footer-container -->
  </footer>
  <!-- /.footer -->
  <form action="" class="form modal-form">
    <img src="img/close.svg" alt="" class="modal-form__close">
    <h2 class="callback-form__title">Узнайте стоимость проекта</h2>
    <p class="callback-form__subtitle">В ближайшее время и ответим на все интересующие вас вопросы, оставьте почту или
      телефон и мы откликнемся удобным для Вас способом</p>
    <p class="callback-form__name-error"></p>
    <input type="text" placeholder="* Ваше имя" class="input callback-form__input" />
    <p class="callback-form__phone-error"></p>
    <input type="tel" placeholder="* Номер телефона" class="input callback-form__input" />
    <p class="callback-form__email-error"></p>
    <input type="email" placeholder="E-mail для получения ответа" class="input callback-form__input" />
    <button class="button callback-form__button">Позвоните мне</button>
    <p class="policy callback-form__policy">
      * Поля обязательны для заполнения. Нажимая кнопку, вы соглашаетесь с
      <a class="callback-form__link" href="policy.html">политикой конфеденциальности</a>
    </p>
  </form>
  <div class="overlay"></div>
  <div class="modal-overlay"></div>
  <?php wp_footer();?>
  
  <!-- <script type="module" async src="3d.js"></script> -->
</body>

</html>