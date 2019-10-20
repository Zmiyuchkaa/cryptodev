<?php


$db_host = "185.136.166.20"; 
$db_user = "test"; 
$db_password = "toster"; 
$db_base = "Dev_db"; 
$db_table = "DB_insert_rows";


$link = mysqli_connect($db_host, $db_user, $db_password, $db_base);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$query = "INSERT INTO DB_insert_rows (name, phone, email ) VALUES('$name', '$phone', '$email')";
if (!mysqli_query($link, $query)) {
  die('An error occurred.');
} else {
echo "Thanks.";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800&display=swap" rel="stylesheet">
    <title>CRyPT</title>
  </head>

  <body>
    <button type="button" name="button" class="menu-button">
      <div class="menu-button__text">МЕ</div>
      <div class="menu-button__text">НЮ</div>
    </button>

    <div class="registartion-button__container">
      <button type="button" name="button" class="registartion-button">
        <span class="registartion-button--general">Регистрация</span>
        <span class="registartion-button--hovered">Регистрация</span>
      </button>
    </div>

    <div class="overview">
      <div class="overview__top-screen">
        <div class="overview__top-screen__heading">
          <div class="overview__top-screen__heading__container">
            <div class="overview__top-screen__heading__container__logo">
              <button type="button" name="button" class="logo-button">
                <span class="logo-button--general">CRyPT</span>
                <span class="logo-button--hovered">Супермаркет Криптовалют</span>
              </button>
              
            </div>
          </div>
          <div class="overview__top-screen__heading__container--empty"></div>
        </div>
    </div>

      <div class="overview__middle-screen">
        <div class="overview__middle-screen__info">
          <p class="overview__middle-screen__info__first-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
            deserunt mollit anim id est laborum.
          </p>
          <p>
            Vitae tortor condimentum lacinia quis vel eros. Vel turpis nunc eget lorem dolor. 
            Quisque id diam vel quam. Augue neque gravida in fermentum et sollicitudin ac orci. 
            Quis vel eros donec ac odio. Mauris in aliquam sem fringilla ut morbi tincidunt. 
            Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. 
          </p>
        </div>
        <h3 class="overview__middle-screen__heading">
          Получай пассивный доход на колебаниях курса
        </h3>
      </div>

      <div class="overview__bottom-screen">
        <div class="overview__bottom-screen__heading">
          <h2 class="overview__bottom-screen__heading__text">
            Дополнительный Доход
          </h2>
        </div>
        <div class="overview__bottom-screen__info">
          <ul class="overview__bottom-screen__info__list">
            <li class="overview__bottom-screen__info__list__item">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.s
            </li>
            <li class="overview__bottom-screen__info__list__item">
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
            ut aliquip ex ea commodo consequat. 
            </li>
            <li class="overview__bottom-screen__info__list__item">
              Duis aute irure dolor in reprehenderit 
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            </li>
            <li class="overview__bottom-screen__info__list__item">
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
            deserunt mollit anim id est laborum.
            </li>
            <li class="overview__bottom-screen__info__list__item">
              Quis vel eros donec ac odio. Mauris in aliquam sem fringilla ut morbi tincidunt. 
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="about">
      <div class="about__heading">
        <h2 class="about__heading__text">Платформа CRyPT</h2>
      </div>
      <div class="about__content">
        <div class="about__content__text">
          <div class="about__content__text__info">
            <h3 class="about__content__text__info__heading">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
              <br>
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h3>
            <p class="about__content__text__info__text">
              Ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis.
              Scelerisque eleifend donec pretium vulputate. Tellus cras adipiscing enim 
              eu turpis egestas pretium aenean. Vitae et leo duis ut diam quam.  
            </p>
          </div>
        </div>
        <div class="about__content__text">
          <div class="about__content__text__info">
            <h3 class="about__content__text__info__heading">
              Aliquet risus feugiat in ante metus dictum at. 
            </h3>
            <p class="about__content__text__info__heading__text">
              Nulla pellentesque dignissim enim sit amet venenatis. 
              Pellentesque dignissim enim sit amet venenatis urna cursus eget. 
              Scelerisque felis imperdiet proin fermentum leo.
            </p>
          </div>
        </div>
        <div class="about__content__text">
          <div class="about__content__text__info">
            <h3 class="about__content__text__info__heading">
              Malesuada proin libero nunc consequat interdum. 
            </h3>
            <p class="about__content__text__info__heading__text">
              Cras sed felis eget velit aliquet. Massa tincidunt dui ut ornare lectus. 
              Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. 
              Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. 
              Accumsan in nisl nisi scelerisque eu ultrices.
            </p>
          </div>
        </div>
      </div>
      <div class="about__bonuses">
        <div class="about__bonuses__info">
          <div class="about__bonuses__info__heading">
            Бонусы за регистрацию
          </div>
          <div class="testimonials__sony__info__text">
            Pretium viverra suspendisse potenti nullam ac tortor vitae purus. 
            Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. 
            Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget. 
            Tellus orci ac auctor augue mauris augue. Tellus orci ac auctor augue mauris augue. 
            Sit amet venenatis urna cursus eget. Ullamcorper morbi tincidunt ornare massa eget 
            egestas. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. 
            Volutpat blandit aliquam etiam erat velit. 
            Viverra orci sagittis eu volutpat odio facilisis mauris sit amet.
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer__form">
        <form class="footer__form__container" action="form.php" method="post">
          <h2 class="footer__form__heading">Регистрация</h2>
          <div class="footer__form__fields-wrapper">
            <input type="text" name='name' id='name' placeholder="Ваше имя" class="footer__form__field footer__form__field--name">
            <input type="text" name='phone' id='phone' placeholder="Номер телефона" class="footer__form__field footer__form__field--name">
            <input type="email" name='email' id='email' placeholder="Ваш e-mail" class="footer__form__field">
          </div>
          <div class="footer__form__button-wrapper">
            <button type="submit" name="button" class="footer__form__button">Отправить</button>
          </div>
        </form>
      </div>
    </footer>
  </body>
</html>