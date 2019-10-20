<?php

// Параметры для подключения
$db_host = "185.136.166.20"; 
$db_user = "test"; // Логин БД
$db_password = "toster"; // Пароль БД
$db_base = "Dev_db"; // Имя БД
$db_table = "DB_insert_rows"; // Имя Таблицы БД
// Create connection
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
    <button type="button" name="button" class="kz__menu-button">
      <div class="kz__menu-button__text">Me</div>
      <div class="kz__menu-button__text">nu</div>
    </button>

    <div class="kz__registartion-button__container">
      <button type="button" name="button" class="kz__registartion-button">
        <span class="kz__registartion-button--general">Registration</span>
        <span class="kz__registartion-button--hovered">Price €590</span>
      </button>
    </div>

    <div class="kz__header">
      <a href="#" class="kz__header__title">
        <img src="images/tuff_title.svg" alt="Tuff" class="kz__logo-img">
      </a>
    </div>

    <div class="kz__overview">
      <div class="kz__overview__top-screen">
        <div class="kz__overview__top-screen__heading">
          <div class="kz__overview__top-screen__heading__container">
            <div class="kz__overview__top-screen__heading__container__price-wrapper">
              <img src="images/dotted-rectangle.svg" alt="Dotted rectangle" class="kz__dotted-rectangle-img">
              <div class="kz__overview__top-screen__heading__container__price">
                Price €590
              </div>
            </div>
          </div>
          <div class="kz__overview__top-screen__heading__wrapper">
            <h2 class="kz__overview__top-screen__heading__text">
              20-25 Sept + 18-19 Oct
            </h2>
          </div>
          <div class="kz__overview__top-screen__heading__container--empty"></div>
        </div>
        <div class="kz__overview__top-screen__content">
          <div class="kz__overview__top-screen__content__heading">
            <h3 class="kz__overview__top-screen__content__heading__text">
              What can I get out of participating in the training?
            </h3>
          </div>
          <img src="images/wave.svg" alt="Wave" class="kz__wave">
          <div class="kz__overview__top-screen__content__info">
            <div class="kz__overview__top-screen__content__info__text">
              Participants leave the course with the courage and self-awareness to
              have totally different conversations with their employees or
              colleagues that draw out the motivation, responsibility, and
              development in their teams.
            </div>
          </div>
        </div>
      </div>

      <div class="kz__overview__middle-screen">
        <div class="kz__overview__middle-screen__info">
          <p class="kz__overview__middle-screen__info__first-p">
            The course consists of four days of intensive training, facilitated
            by one of our certified leadership trainers. It begins with two
            consecutive days where you learn the basics of a coaching leadership
            mindset and its core abilities. After putting these new abilities
            into practice back at work, you return for the last two days which
            deepen the training. Included in the price is a 30-minute coaching
            conversation with a Tuff coach one month after you complete the
            course.
          </p>
          <p>
            The overall theme is a coaching mindset, which translates into
            different kinds of conversations such as feedback conversations,
            coaching conversations and relationship conversations. You’ll get a
            wealth of new tools and practices that you can apply directly. The
            training is based on a methodology developed by TUFF over more than
            twenty years and promises to deliver lasting results.
          </p>
        </div>
        <h3 class="kz__overview__middle-screen__heading">
          Content overview
        </h3>
      </div>

      <div class="kz__overview__bottom-screen">
        <div class="kz__overview__bottom-screen__heading">
          <h2 class="kz__overview__bottom-screen__heading__text">
            You will discover
          </h2>
          <img src="images/ellipse.svg" alt="Ellipse" class="kz__ellipse-img">
        </div>
        <div class="kz__overview__bottom-screen__info">
          <ul class="kz__overview__bottom-screen__info__list">
            <li class="kz__overview__bottom-screen__info__list__item">
              How to be a catalyst for your employees/colleagues taking more
              responsibility and ownership for the business
            </li>
            <li class="kz__overview__bottom-screen__info__list__item">
              How to avoid defaulting to solving problems, giving advice, and
              being solely responsible so others can step into their power
            </li>
            <li class="kz__overview__bottom-screen__info__list__item">
              How to have difficult conversations in a way that empowers others
            </li>
            <li class="kz__overview__bottom-screen__info__list__item">
              How to have effective feedback conversations that lead to real shifts
            </li>
            <li class="kz__overview__bottom-screen__info__list__item">
              Your leadership strengths and blind spots
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="kz__header">
      <a href="#" class="kz__header__title">
        <img src="images/tuff_title.svg" alt="Tuff" class="kz__logo-img">
      </a>
    </div>

    <div class="kz__testimonials">
      <div class="kz__testimonials__heading">
        <img src="images/quotes.svg" alt="Quotes" class="kz__quotes-img">
        <h2 class="kz__testimonials__heading__text">Testimonials</h2>
      </div>
      <div class="kz__testimonials__countries">
        <div class="kz__testimonials__countries__country">
          <div class="kz__testimonials__countries__country__img">
            <img src="images/dotted-rectangle.svg" alt="Dotted rectangle" class="kz__dotted-rectangle-img">
            <img src="images/UK.svg" alt="UK" class="kz__flag-img">
          </div>
          <div class="kz__testimonials__countries__country__info">
            <h3 class="kz__testimonials__countries__country__info__heading">
              Antonia Gineva,
              <br>
              Legal and Compliance Officer at EM Bonds,
              <br>
              England
            </h3>
            <p class="kz__testimonials__countries__country__info__text">
              Therese is an experienced Tuff coach and trainer and is also an
              accredited facilitator in, among other things, The Human Element
              and Motivational Interviewing. She has a natural capacity to
              relate to and challenge managers with an engineering background
              like hers.
            </p>
          </div>
        </div>
        <div class="kz__testimonials__countries__country">
          <div class="kz__testimonials__countries__country__img">
            <img src="images/dotted-rectangle.svg" alt="Dotted rectangle" class="kz__dotted-rectangle-img">
            <img src="images/Sweden.svg" alt="Sweden" class="kz__flag-img">
          </div>
          <div class="kz__testimonials__countries__country__info">
            <h3 class="kz__testimonials__countries__country__info__heading">
              Richard Kronfält,
              <br>
              Global Head of Delivery at Alite International,
              <br>
              Sweden
            </h3>
            <p class="kz__testimonials__countries__country__info__text">
              I would recommend Tuff Leadership Training to any company that
              aspires to be a modern, Agile organisation, and to all managers
              and leaders
            </p>
          </div>
        </div>
        <div class="kz__testimonials__countries__country">
          <div class="kz__testimonials__countries__country__img">
            <img src="images/dotted-rectangle.svg" alt="Dotted rectangle" class="kz__dotted-rectangle-img">
            <img src="images/Portugal.svg" alt="Portugal" class="kz__flag-img">
          </div>
          <div class="kz__testimonials__countries__country__info">
            <h3 class="kz__testimonials__countries__country__info__heading">
              Dunia Reverter,
              <br>
              Group Head of Customer and Operational Efficiency at Arrow Global
              Group Plc International
              <br>
              Portugal
            </h3>
            <p class="kz__testimonials__countries__country__info__text">
              Distinguishing the “soft side,” how being “tough” can be an act of
              kindness. A framework to be more intentional about the
              conversations I have.
            </p>
          </div>
        </div>
      </div>
      <div class="kz__testimonials__sony">
        <img src="images/sony.svg" alt="Sony" class="kz__sony-img">
        <div class="kz__testimonials__sony__info">
          <div class="kz__testimonials__sony__info__heading">
            Eva Lorentzon,
            <br>
            formerly Learning & Development Specialist at Sony Mobile
            <br>
            (now at King, also a Tuff customer)
          </div>
          <div class="kz__testimonials__sony__info__text">
            What I mostly appreciate about Tuff Leadership Training is their
            hands-on, practical training that makes a difference in behaviour
            immediately. They are also excellent partners to HR and always very
            generous with sharing material, thoughts and the research they work
            with.Tuff is always on my top three list because they are very
            passionate about contributing to better workplaces by breaking
            traditional mindsets about leaders and employees and instead empower
            everyone to be responsible and contribute.
          </div>
        </div>
      </div>
    </div>

    <footer class="kz__footer">
      <div class="kz__footer__social">
        <div class="kz__footer__social__wrapper">
          <img src="images/line.svg" alt="Line" class="kz__line-img">
          <div class="kz__footer__social__info">
            <h3 class="kz__footer__social__info__heading">
              Contact
            </h3>
            <div class="kz__footer__social__info__text">
              <p class="kz__footer__social__info__text__first-p">
                Kyiv, UBI Conference Hall
                <br>
                September 20-21 + October 18-19
              </p>
              <p>
                info@tuffledarskapstraning.se
                <br>
                (096) 151 15 15
                <br>
                (096) 151 15 15
              </p>
            </div>
          </div>
        </div>

        <div class="kz__footer__social__wrapper">
          <img src="images/line.svg" alt="Line" class="kz__line-img">
          <div class="kz__footer__social__info">
            <h3 class="kz__footer__social__info__heading">
              Follow
            </h3>
            <div class="kz__footer__social__info__social-medias">
              <a href="#" class="kz__footer__social__info__social-medias__link"><img src="images/facebook.svg" alt="Facebook" class="kz__social-media-img"></a>
              <a href="#" class="kz__footer__social__info__social-medias__link"><img src="images/instagram.svg" alt="Instagram" class="kz__social-media-img"></a>
              <a href="#" class="kz__footer__social__info__social-medias__link"><img src="images/twitter.svg" alt="Twitter" class="kz__social-media-img"></a>
            </div>
          </div>
        </div>
        <img src="images/beetroot-academy.svg" alt="Beetroot Academy" class="kz__beetroot-academy-img">
      </div>
      <div class="kz__footer__form">
        <form action="index.php" method="post">
          <label for="name">Name:</label>
          <input name="name" id="name" type="text" />
          
          <label for="phone">Phone:</label>
          <input name="phone" id="phone" type="text" />

          <label for="email">Email:</label>
          <input name="email" id="email" type="text" />
          
          <input type="hidden" name="process" value="1" />
          <input type="submit" value="Submit" />
        </form>

      </div>
    </footer>
  </body>
</html>