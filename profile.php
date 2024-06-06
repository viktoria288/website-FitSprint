<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
  </head>
  <body>
    <div class="header-profile">
      <div class="profile-arrow">
       <a href="index.php"> <img src="img/arrow-profile.png" alt="" /></a>
      </div>
      <div class="profile-logo">
        <img src="img/logo.jpg" alt="" />
      </div>
    </div>

    <div class="profile-personal-inf">
      <div class="part1">
      <div class="profile-img-text">
        <div class="profile-avatar">
          <img src="img/avatar.png" alt="" />
         
        </div>
        <a href="#">Додати фото</a>
      </div>

      <div class="profile-text">
        <div class="profile1">
        <input placeholder="Ім'я Прізвище" type="text" class="name-surname" value="<?php echo isset($_SESSION['name']) && isset($_SESSION['surname']) ? $_SESSION['name'] . ' ' . $_SESSION['surname'] : ''; ?>" />
       <a href="#"> <img src="img/carandash.png" alt="" /></a>
      </div>
      <div class="profile2">
      <input placeholder="useremail@gmail.com" type="text" class="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" />
       <a href="#"> <img src="img/carandash.png" alt="" /></a>
      </div>
    </div>
    </div>
      <div class="personal-characteristics">
        <div class="char-text">
          <div class="char-img">
            <img src="img/Group (1).png" alt="" />
          </div>
          <div class="char-title">
            <p>Особисті характеристики:</p>
          </div>
        </div>
        <div class="char-inputs">
          <div class="char-inputs1">
            <div class="number-input">
              <input placeholder="Вага" type="number" class="weight" />
              <div class="arrow-up">▲</div>
              <div class="arrow-down">▼</div>
            </div>
          </div>
          <div class="char-inputs2">
            <div class="number-input">
              <input placeholder="Зріст" type="number" class="height" />
              <div class="arrow-up">▲</div>
              <div class="arrow-down">▼</div>
            </div>
          </div>
      </div>
      <div class="profile-button-container">
        <button class="profile-button">Зберегти</button>
      </div>
    </div>


    <div class="main-information">
      <div class="title-inf">
        <p>Поточний курс</p>
      </div>
      <div class="text-inf">
        <p>ПРОСУНУТИЙ КУРС</p>
      </div>

      <div class="img-text">
        <div class="img1">
          <img src="img/profile-img.png" alt="">
        </div>
        <div class="text">
          <p class="text1">Деталі курсу: </p>
          <hr>
          <div class="text-details">
            <div class="detail">
              <div class="img">
<img src="img/detail1.png" alt="">
              </div>
              <div class="t">
                <p class="t1">Старт курсу: <br /> 23.03.2024</p>
              </div>
            </div>
            <div class="detail">
              <div class="img">
<img src="img/detail2.png" alt="">
              </div>
              <div class="t">
                <p class="t2">Кінець курсу: <br />23.03.2025</p>
              </div>
            </div>
            <div class="detail">
              <div class="img">
<img src="img/detail3.png" alt="">
              </div>
              <div class="t">
                <p class="t3">12 днів</p>
              </div>
            </div>
            <div class="detail">
              <div class="img">
<img src="img/detail4.png" alt="">
              </div>
              <div class="t">
                <p>Рівень складності: <br />для профі</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <footer>
      
      <div class="footer-line"></div>
      <div class="footer-container">
     <div class="links">
      <a href="reset-password.php" class="link1">Змінити пароль</a>
      <a href="logout.php" class="link2">Вийти з профілю</a>
      <a href="delete_profile.php" class="link3">Видалити профіль</a>
     </div>
          <div class="logo-blue">
              <img src="img/logo-blue.jpg" alt="FitSprint Logo">
          </div>
        </div>
      
      <div class="footer-line"></div>
  </footer>






    <script>
    document.querySelectorAll('.number-input').forEach(function(container) {
      const input = container.querySelector('input[type="number"]');
      const arrowUp = container.querySelector('.arrow-up');
      const arrowDown = container.querySelector('.arrow-down');

      arrowUp.addEventListener('click', function() {
        input.stepUp();
      });

      arrowDown.addEventListener('click', function() {
        input.stepDown();
      });
    });
  </script>
  </body>
</html>