<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Сфера Безопасности</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="js/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick-theme.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="header-content row">
        <div class="logo-tel">
          <div class="logo"><img src="img/logo.svg">
            <p>Установка систем безопасности <br>в Санкт-Петербурге и Ленинградской области</p>
          </div>
          <div class="tel">
            <div class="phone-mail"><a class="phone" href="tel:88000000000">8 800 000-00-00</a><a class="mail" href="mailto:email: mail@cb73.ru">email: mail@cb73.ru</a></div><a class="bell" href="#">Заказать звонок</a>
          </div>
        </div>
        <hr>
        <div class="city-menu">
          <div class="city">
            <p>Ваш город:<a href="#"> Санкт-Петербург</a></p>
          </div>
          <div class="menu-hamburger">
            <div class="block-menu">
              <p>Меню</p>
              <div class="burger">
                <div class="block1"></div>
                <div class="block2"></div>
                <div class="block3"></div>
              </div>
            </div>
            <nav class="habmenu">
              <div><a class="item" href="#">Системы</a>
                <div class="menu-hid"><a href="#">111111111</a><a href="#">222222222</a></div>
              </div>
              <div><a class="item" href="#">Решения</a></div>
            </nav>
            <nav class="menu">
              <div><a class="menu-item" href="#">Системы</a></div>
              <div><a class="menu-item" href="#">Решения</a></div>
              <div><a class="menu-item" href="#">Оборудование</a></div>
              <div><a class="menu-item" href="#">Наши работы</a></div>
              <div><a class="menu-item" href="#">Компания</a></div>
              <div><a href="#">Контакты</a></div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <section class="contacts-head">
      <div class="ch-content row">
        <h1>Заголовок страницы</h1>
        <p>Подзаголовок</p>
      </div>
    </section>
    <section class="contacts-block1 cnt">
      <div class="contacts-content row">
        <div class="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2236.5049809380093!2d37.558113216034364!3d55.90594388763765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b539fb53798437%3A0x84a530ad45053e9e!2z0YPQuy4g0JzQvtC70L7QutC-0LLQsCwgMjEsINCc0L7RgdC60LLQsCwgMTI3MjUz!5e0!3m2!1sru!2sru!4v1493119676091" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        <div class="contact">
          <div class="adress-contact">
            <div class="icon"><img src="img/marker-icon.svg"></div>
            <div class="contact-text">
              <h4>Адрес:</h4>
              <p>г. Ульяновск, ул. Карла Маркса, 39А</p>
            </div>
          </div>
          <div class="phone-contact">
            <div class="icon"><img src="img/contact-icon.svg"></div>
            <div class="contact-text">
              <h4>Телефон:</h4>
              <p>8 800 000 00 00</p>
            </div>
          </div>
          <div class="mail-contact">
            <div class="icon"><img src="img/contact-icon2.svg"></div>
            <div class="contact-text">
              <h4>E-mail:</h4>
              <p>mail@cb73.ru</p>
            </div>
          </div>
        </div>
      </div>
      <div class="dis-img">
        <div class="dis-block"></div>
        <div class="dis-block"></div>
        <div class="dis-block"></div>
        <div class="dis-block"></div>
      </div>
    </section>
    <section class="contact-form cnt">
      <div class="cf-content row">
        <div class="cf-head">
          <h2>Вы можете задать вопрос</h2>
          <p>Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости <br> услуг и подготовят индивидуальное коммерческое предложение.</p>
        </div>
        <form method="post" action="mailer.php">
          <div class="input-block">
            <input name="name" placeholder="Ваше имя">
            <input name="phone" placeholder="Номер телефона">
            <input name="mail" placeholder="E-mail (обязательно)">
            <input name="product" placeholder="Интересующий товар/услуга">
          </div>
          <div class="form-text-block">
            <textarea name="messege" placeholder="Ваше сообщение/вопрос (обязательно)"></textarea>
            <button class="button-blue">Отправить сообщение</button>
          </div>
        </form>
      </div>
    </section>
    <footer class="cnt">
      <div class="footer-content row">
        <nav class="system"><a class="head-text" href="#">
            <h3>Системы</h3></a><a href="#">Домофонные системы</a><a href="#">Контроль доступа (СКУД)</a><a href="#">Охранные системы</a><a href="#">Организация беспроводных сетей</a><a href="#">Мониторинг строительных объектов</a><a href="#">Видеонаблюдение</a><a href="#">Пультовая охрана объектов</a></nav>
        <nav class="solutions"><a class="head-text" href="#">
            <h3>Решения</h3></a><a href="#">Склады</a><a href="#">Стройплощадки</a><a href="#">Медучреждения</a><a href="#">Автобазы</a><a href="#">Офисы</a><a href="#">Квартиры</a><a href="#">Производства</a><a href="#">Госучреждения</a><a href="#">Частные дома</a><a href="#">Охранная система для дачи</a><a href="#">Охранная система для коттеджа</a><a href="#">Загородные дома</a><a href="#">Магазины</a><a href="#">Рестораны</a></nav>
        <nav class="equipment"><a class="head-text" href="#">
            <h3>Оборудование</h3></a><a href="#">Оборудование для видеонаблюдения</a><a href="#">Домофоны</a><a href="#">Источники питания</a><a href="#">Кабели, разъемы</a><a href="#">Контроль доступа в помещение (СКУД)</a><a href="#">Видеодомофоны</a><a href="#">Охранная система GSM</a><a href="#">Материалы</a><a href="#">Охранная сигнализация</a><a href="#">Сервера, рабочие станции, комплектующие</a><a href="#">Сетевое оборудование</a><a href="#">Шкафы, стойки, акссесуары</a></nav>
        <nav class="works-nav"><a class="head-text" href="#">
            <h3>Наши работы</h3></a><a href="#">Автобазы</a><a href="#">Производства</a><a href="#">Офисы</a><a href="#">Загородные дома</a><a href="#">Склады</a><a href="#">Стройплощадки</a></nav>
        <nav class="company-nav"><a class="head-text" href="#">
            <h3>Компания</h3></a><a href="#">О компании</a><a href="#">Новости</a><a href="#">Сертификаты</a><a href="#">Партнёры</a><a href="#">Отзывы клиентов</a><a href="#">Сотрудники</a><a href="#">Поддержка</a><a href="#">Вопрос-ответ</a></nav>
        <nav class="contacts"><a class="head-text" href="#">
            <h3>Контакты</h3></a>
          <p>г. Москва, ул. Молокова 21, <br>офис 207</p><a href="tel:88000000000">тел.: 8 800 000 00 00</a><a href="mailto:mail@cb73.ru">email: mail@cb73.ru</a>
          <div class="maps"><a href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9C%D0%BE%D0%BB%D0%BE%D0%BA%D0%BE%D0%B2%D0%B0,+21,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127253/@55.9059439,37.5581132,17z/data=!3m1!4b1!4m5!3m4!1s0x46b539fb53798437:0x84a530ad45053e9e!8m2!3d55.9059409!4d37.5603019" target="_blank"><img src="img/maps.png"></a></div>
          <p>Ваш город:<a href="#">Санкт-Петербург</a></p><a class="nextteam" href="#"><img src="img/nt-logo.svg"></a>
        </nav>
      </div>
      <div class="contacts2">
        <div class="contact-text">
          <p>г. Москва, ул. Молокова 21, <br>офис 207</p><a href="tel:88000000000">тел.: 8 800 000 00 00</a><a href="mailto:mail@cb73.ru">email: mail@cb73.ru</a>
          <p>Ваш город:<a href="#">Санкт-Петербург</a></p>
        </div><a class="nextteam2" href="#"><img src="img/nt-logo.svg"></a>
      </div>
    </footer>
    <div class="footer-end">
      <div class="end-content row">
        <p>© 2017</p><a href="#">Политика конфиденциальности</a>
      </div>
    </div>
  </body>
</html>