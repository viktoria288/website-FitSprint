<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/aboutus.css" />
  </head>
  <body>
    <header class="main-header">
      <section class="header-container">
        <div class="header-navigation">
          <div class="logo">
            <img src="img/logo.png" alt="" />
          </div>
          <nav class="menu">
            <ul>
              <li><a href="index.php">ГОЛОВНА СТОРІНКА</a></li>
              <li><a href="aboutUs.php">ПРО НАС</a></li>
              <?php 
              if(isset($_SESSION['email'])){
                echo '<li><a href="profile.php">ПРОФІЛЬ</a></li>';
              }else{
            
              ?>
              <li><a href="login.php">ВХІД</a></li>
              <li><a href="registration.php">РЕЄСТРАЦІЯ</a></li>
              <?php   }?>
            </ul>
          </nav>
        </div>
      </section>
      <section class="header-main-text">
        <div class="name">
          <p>FitSprint</p>
        </div>
        <div class="header-text">
          <p>Зустрічайте наших експертів</p>
        </div>

        <form>
          <button type="submit" formaction="#" class="header-button">
            Почати
          </button>
        </form>
      </section>
    </header>

    <main>
      <div class="main-container">
        <div class="first-container">
          <div class="first-title">
            <div class="first-subtitle">
              <p>Не знаєте, з чого почати?</p>
            </div>
            <div class="second-subtitle">
              <p>
                Програми пропонують щоденні вказівки за допомогою інтерактивного
                календаря,<br />
                щоб тримати вас у курсі.
              </p>
            </div>
          </div>
          <div class="second-title">
            <div class="third-subtitle">
              <p>
                workout<br />
                with me
              </p>
            </div>
            <div class="fourth-subtitle">
              <p>
                Величезний вибір контенту для здоров’я та фітнесу, здорових<br />
                рецептів та історій трансформації, які допоможуть вам бути у<br />
                формі та залишатися у формі!
              </p>
            </div>
            <form>
              <button type="submit" formaction="#" class="second-title-button">
                Приєднуйтесь до клубу зараз!
              </button>
            </form>
            <div class="main-first-img">
              <img src="img/main-img.png" alt="" />
            </div>
          </div>
        </div>

        <div class="aboutus">
          <div class="aboutus-first-title">
            <div class="aboutus-first-subtitle">
              <div class="aboutus-first-text">
                <p>
                  Тренуйтеся вдома<br />
                  безкоштовно
                </p>
              </div>
              <div class="aboutus-first-tagline">
                <p>
                  Ми вважаємо, що фітнес має бути доступним для всіх і всюди,<br />
                  незалежно від доходу чи доступу до тренажерного залу.
                  Завдяки<br />
                  сотням професійних тренувань, здоровим рецептам та<br />
                  інформативним статтям, а також одній із найпозитивніших<br />
                  спільнот в Інтернеті, ви матимете все необхідне для
                  досягнення<br />
                  ваших особистих фітнес-цілей – безкоштовно!
                </p>
              </div>
            </div>
            <div class="aboutus-second-subtitle">
              <img src="img/abouus1.png" alt="" />
            </div>
          </div>

          <div class="aboutus-second-title">
            <div class="seventh-subtitle">
              <img src="img/aboutus2.png" alt="" />
            </div>
            <div class="aboutus-third-subtitle">
              <div class="aboutus-second-text">
                <p>
                  Отримайте більше з<br />
                  недорогими програмами<br />
                  навчання та розширеними<br />
                  функціями
                </p>
              </div>
              <div class="aboutus-second-tagline">
                <p>
                  Навчайтеся без великих витрат і отримуйте максимум користі
                  завдяки<br />
                  нашим доступним програмам та розширеним можливостям. Ми
                  пропонуємо<br />
                  широкий спектр курсів, що відповідають вашим<br />
                  потребам, забезпечуючи високу якість навчання за вигідною
                  ціною.
                </p>
              </div>
            </div>
          </div>
        </div>

        <section class="sub-section">
          <div class="subscription-text">
            <p>Підписка</p>
          </div>
          <div class="subscription">
            <div class="sub">
              <div class="s s1">
                <div class="sub-subtitle">
                  <p>Free Plan</p>
                </div>
                <div class="sub-text">
                  <p>
                    План, який пропонує базові можливості для занять фітнесом
                    безкоштовно.
                  </p>
                  <ul>
                    <li>- Доступ до обмеженого контенту відео тренувань.</li>
                    <li>- Одне тренування в тиждень з інструктором онлайн.</li>
                    <li>- Стандартні поради щодо харчування.</li>
                    <li>- Доступ до спільноти учасників.</li>
                    <li>
                      - Обмежений доступ до статей та блогів про фітнес та
                      здоровий спосіб життя.
                    </li>
                    <li>
                      - Можливість слідкувати за своїм прогресом у спеціальному
                      додатку.
                    </li>
                  </ul>
                </div>
                <div class="sub-link">
                  <a href="basic-course.html">Переглянути</a>
                  <img src="img/arr.png" alt="" />
                </div>
              </div>
            </div>

            <div class="sub">
              <div class="s s2">
                <div class="sub-subtitle">
                  <p>Advanced Plan</p>
                </div>
                <div class="sub-text">
                  <p>
                    Покращений план для тих, хто бажає отримати більше
                    можливостей та результатів від своїх занять.
                  </p>
                  <ul>
                    <li>- Повний доступ до бібліотеки відео тренувань.</li>
                    <li>- Три тренування в тиждень з інструктором онлайн.</li>
                    <li>- Індивідуальні поради щодо харчування.</li>
                    <li>- Доступ до ексклюзивних відео з тренувань.</li>
                    <li>- Можливість брати участь у вебінарах та семінарах.</li>
                  </ul>
                </div>
                <div class="sub-link">
                  <a href="standard-course.html">Переглянути</a>
                  <img src="img/arr.png" alt="" />
                </div>
              </div>
            </div>

            <div class="sub">
              <div class="s s3">
                <div class="sub-subtitle">
                  <p>Advanced Plan</p>
                </div>
                <div class="sub-text">
                  <p>
                    Преміум план для серйозних спортсменів та тих, хто бажає
                    досягти найкращих результатів.
                  </p>
                  <ul>
                    <li>- Необмежений доступ до всіх відео тренувань.</li>
                    <li>- Персональний тренер і план харчування.</li>
                    <li>
                      - Доступ до ексклюзивних відео та спеціальних програм
                      тренувань.
                    </li>
                    <li>
                      - Можливість брати участь у персональних консультаціях з
                      фітнес-експертами.
                    </li>
                    <li>- Пріоритетна підтримка клієнтів.</li>
                  </ul>
                </div>
                <div class="sub-link">
                  <a href="advanced-course.html">Переглянути</a>
                  <img src="img/arr.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="reviews">
            <div class="reviews-subtitle">
              <p>Відгуки</p>
            </div>
            <div class="main-reviews">
              <div class="rew rl">
                <div class="rew-title">
                  <p>Андрій</p>
                </div>
                <div class="rew-text">
                  <p>
                    Перейшов на Advanced Plan і не шкодую. Тренування з
                    інструктором тричі на тиждень допомогли мені значно
                    покращити форму. Особливо подобаються індивідуальні поради
                    щодо харчування.
                  </p>
                </div>
              </div>

              <div class="rew">
                <div class="rew-title">
                  <p>Марія</p>
                </div>
                <div class="rew-text">
                  <p>
                    FitSprint - це супер! Починала з Free Plan, але потім
                    перейшла на Pro Plan. Щоденні тренування та персональний
                    тренер - це саме те, що мені було потрібно для досягнення
                    своїх цілей.
                  </p>
                </div>
              </div>

              <div class="rew rr">
                <div class="rew-title">
                  <p>Віктор</p>
                </div>
                <div class="rew-text">
                  <p>
                    Мені подобається Advanced Plan на FitSprint. Велика
                    бібліотека відео та можливість брати участь у вебінарах дуже
                    мотивують. Результати стали помітними вже за кілька тижнів.
                  </p>
                </div>
              </div>
            </div>
            <div class="main-reviews2">
              <div class="rew rl">
                <div class="rew-title">
                  <p>Ігор</p>
                </div>
                <div class="rew-text">
                  <p>
                    Pro Plan на FitSprint вразив мене своїм рівнем сервісу.
                    Індивідуальний підхід, консультації з експертами та щоденні
                    тренування зробили мої тренування ефективнішими. Дуже
                    задоволений своїм прогресом!
                  </p>
                </div>
              </div>

              <div class="rew">
                <div class="rew-title">
                  <p>Інна</p>
                </div>
                <div class="rew-text">
                  <p>
                    Після переходу на Advanced Plan я помітила значні покращення
                    у своєму фізичному стані. Особливо ціную можливість
                    отримувати індивідуальні поради щодо харчування. Вебінари
                    також дуже корисні.
                  </p>
                </div>
              </div>

              <div class="rew rr">
                <div class="rew-title">
                  <p>Світлана</p>
                </div>
                <div class="rew-text">
                  <p>
                    Advanced Plan на FitSprint - це найкраще, що я спробувала.
                    Відео з тренуваннями, три заняття на тиждень з інструктором
                    і індивідуальні поради щодо харчування дійсно допомагають
                    досягати результатів.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <footer>
      <div class="footer-line"></div>
      <div class="footer-content">
        <div class="logo-blue logo-index">
          <img src="img/logo.jpg" alt="FitSprint Logo" />
        </div>
        <div class="contact-info">
          <div class="address">
            <p>
              <img src="img/placeholder.png" alt="Address Icon" /> Площа
              Визволення 3А, Київ, Україна, 10001
            </p>
          </div>
          <div class="phones">
            <p>
              <img src="img/telephone.png" alt="Phone Icon" /> +380 965 348 512
            </p>
            <p>
              <img src="img/printer.png" alt="Phone Icon" /> +380 966 777 452
            </p>
          </div>
          <div class="social-media">
            <a href="https://www.facebook.com/people/Course-Fitsprint/pfbid08d1rzB3iAdqaBTNqSzCKsf7p95TFLAxpfmLs9PgoihoE5M2ZHZ19v1Wy9pGHji6rl/"><img src="img/communication.png" /></a>
            <a href="#"><img src="img/twitter.png" /></a>
            <a href="#"><img src="img/linkedin.png" /></a>
            <a href="#"><img src="img/video.png" /></a>
            <a href="https://www.instagram.com/fitsprint4/"><img src="img/instagram.png" /></a>
            <a href="#"><img src="img/social.png" /></a>
            <a href="#"><img src="img/pinterest.png" /></a>
          </div>
        </div>
      </div>
      <div class="footer-links">
        <a href="aboutUs.php">ПРО НАС</a>
        <a href="#">КОНТАКТИ</a>
        <a href="#">СЛУЖБА ДОПОМОГИ</a>
        <a href="#">ПОЛІТИКА КОНФІДЕНЦІЙНОСТІ</a>
      </div>
      <div class="footer-line"></div>
    </footer>
  </body>
</html>
