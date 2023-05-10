<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Мультистория мастерская мультфильмов - снимайте детские мультфильмы вместе с нами">
  <meta name="keywords" content="мультфильмы, дети, мастерская, камера, ребята, родители, просмотр">
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <style>
    .container {
      max-width: 1050px;
      padding: 0 20px;
      margin: 0 auto;
    }

    .header__row {
      display: grid;
      justify-items: center;
      grid-row-gap: 6px;
      grid-template-areas: "logo" "contacts";
    }

    .header .top-note {
      display: none;
      background: #D9D9D9;
      padding: 15px 0;
      text-align: center;
      font-weight: 400;
      font-size: 14px;
    }

    .header .top-note strong {
      font-weight: 600;
    }

    .header__logo {
      grid-area: logo;
      display: flex;
      justify-content: center;
    }

    .header__logo img {
      max-width: 165px;
    }

    .header .action-btn {
      display: none;
      grid-area: action-btn;
      padding: 7px 60px;
      border: 2px solid #DC051F;
      background: transparent;
      font-weight: 600;
      font-size: 13px;
      line-height: 18px;
      text-align: center;
      border-radius: 20px;
      white-space: nowrap;
      justify-self: center;
      cursor: pointer;
      transition: background ease 0.2s, color ease 0.2s, scale ease 0.1s;
    }

    @media (pointer: fine) {
      .header .action-btn:hover {
        background: #DC051F;
        color: #fff;
      }
    }

    .header .action-btn:active {
      scale: 0.95;
    }

    @media (min-width: 430px) {
      .header__row {
        align-items: center;
        grid-template-areas: "logo contacts" "action-btn action-btn";
        justify-items: stretch;
        padding: 20px 0;
        grid-row-gap: 10px;
      }

      .header__logo {
        justify-content: stretch;
      }

      .header .contacts {
        margin-left: auto;
      }

      .header .action-btn {
        display: block;
      }
    }

    @media (min-width: 640px) {
      .header__row {
        grid-template-areas: "logo contacts action-btn";
        grid-column-gap: 10px;
      }

      .header .contacts {
        margin-left: 0;
      }

      .header .action-btn {
        padding: 7px 25px;
      }
    }

    @media (min-width: 810px) {
      .header .action-btn {
        font-size: 15px;
        padding: 9px 60px;
      }
    }

    @media (min-width: 920px) {
      .header .top-note {
        display: block;
      }
    }

    @media (min-width: 1000px) {
      .header__logo img {
        max-width: 277px;
      }
    }

    .contacts {
      grid-area: contacts;
    }

    .contacts__list {
      display: flex;
      column-gap: 20px;
    }

    .contacts-item {
      display: flex;
      align-items: flex-start;
      font-size: 9px;
      line-height: 12px;
      position: relative;
      color: #000;
    }

    .contacts-item__link[href] {
      display: flex;
      align-items: flex-start;
      text-decoration: none;
      transition: opacity ease 0.2s;
      color: #000;
    }

    .contacts-item__link[href]:hover {
      opacity: 0.5;
    }

    .contacts-item__link[href]:active {
      opacity: 0.1;
    }

    .contacts-item__link[href]::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    }

    .contacts-item__info {
      display: flex;
      flex-direction: column;
    }

    .contacts-item__icon {
      margin-right: 10px;
    }

    .contacts-item__title {
      font-weight: 400;
      text-decoration: none;
      color: inherit;
    }

    .contacts-item__value {
      font-weight: 600;
    }

    @media (min-width: 810px) {
      .contacts-item {
        font-size: 14px;
        line-height: 18px;
      }
    }

    .welcome__row {
      padding-top: 18px;
      position: relative;
    }

    .welcome__title {
      text-align: center;
      display: flex;
      flex-direction: column;
    }

    .welcome__title_top {
      margin-bottom: 20px;
      font-weight: 400;
      font-size: 14px;
      line-height: 20px;
    }

    .welcome__title_bottom {
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 28px;
      line-height: 38px;
    }

    .welcome__title_note {
      color: #DC051F;
      font-weight: 400;
      font-size: 14px;
      line-height: 17px;
    }

    .welcome-slider {
      margin-top: 20px;
      position: relative;
      min-width: 0;
    }

    .welcome-slider__slide {
      display: flex !important;
      justify-content: center !important;
    }

    .welcome-slider__slide-content {
      max-width: 100%;
      border-radius: 50%;
      width: 250px;
      height: 250px;
      object-fit: cover;
    }

    .welcome__action {
      position: absolute;
      bottom: -100px;
      left: 50%;
      transform: translate(-50%, 0);
    }

    @media (min-width: 695px) {
      .welcome__row {
        padding-top: 35px;
        display: grid;
        grid-template-columns: 0.6fr 1fr;
        align-items: center;
      }

      .welcome__title {
        text-align: start;
        align-items: flex-start;
      }

      .welcome__title_top {
        font-size: 18px;
        line-height: 24px;
      }

      .welcome__title_bottom {
        font-size: 30px;
        line-height: 35px;
      }

      .welcome__action {
        margin-top: 40px;
        position: static;
        transform: none;
      }

      .welcome-slider__slide-content {
        width: 300px;
        height: 300px;
      }

      .welcome-slider__pagination {
        column-gap: 12px;
      }

      .welcome-slider__pagination-bullet {
        width: 8px;
        height: 8px;
      }
    }

    @media (min-width: 810px) {
      .welcome__row {
        grid-template-columns: 1fr 1fr;
      }

      .welcome__title_top {
        font-size: 24px;
        line-height: 35px;
      }

      .welcome__title_bottom {
        font-size: 50px;
        line-height: 70px;
      }

      .welcome__title_note {
        font-size: 24px;
        line-height: 30px;
      }

      .welcome-slider {
        transform: translate(0, 0);
      }

      .welcome-slider__slide-content {
        width: 350px;
        height: 350px;
      }
    }

    @media (min-width: 960px) {
      .welcome__row {
        grid-template-columns: 0.8fr 1fr;
      }

      .welcome-slider {
        transform: translate(-5%, 0);
      }

      .welcome-slider__slide-content {
        width: 400px;
        height: 400px;
      }

      .welcome__title_top {
        margin-bottom: 30px;
      }

      .welcome__title_bottom {
        margin-bottom: 30px;
      }

      .welcome__action {
        margin-top: 50px;
        font-size: 20px;
        padding: 8px 70px;
      }
    }
  </style>
  <link rel="icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">
  
  <?php wp_head(); ?>
</head>

<body>
  <?php
    $custom_logo_url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0];
    $tel_numbers = preg_replace('/[-\+\(\) ]/', '', get_field('tel_numbers'));
  ?>

  <div class="popup popup-form">
    <div class="popup__row">
      <div class="popup__wrapper popup-form__wrapper">
        <div class="form-block enroll__form-block"><span class="form-block__title"><?php the_field('form-block-title'); ?></span>
          <form class="request-form" action="#" method="POST">
            <input type="hidden" name="action" value="feedback">
            <input class="request-form__input" type="text" name="name" placeholder="Имя" required>
            <input class="request-form__input" type="tel" name="tel" placeholder="Телефон" required>
            <button class="trigger red-action-btn request-form__submit" type="submit" data-popup-selector=".popup-accept"><?php the_field('form-block-button-text'); ?></button>
          </form>
          <div class="form-block__note">Нажимая на кнопку “<?php the_field('form-block-button-text'); ?>”, <br>вы даете согласие на обработку своих персональных данных</div>
        </div>
      </div>
    </div>
  </div>
  <div class="popup popup-accept">
    <div class="popup__row">
      <div class="popup__wrapper popup-accept__wrapper">
        <div class="popup-accept__logo"><img src="<?php echo $custom_logo_url; ?>" alt="Логотип"></div>
        <div class="popup-accept__text-content">
          <span class="popup-accept__title"><?php the_field('accept-title'); ?></span>
          <span class="popup-accept__description"><?php the_field('accept-subtitle'); ?></span>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <header class="header" id="header">
      <div class="top-note"><span class="top-note__text"><strong><?php bloginfo('name') ?></strong> - <?php echo mb_strtolower(get_bloginfo('description')); ?></span></div>
      <div class="container header__container">
        <div class="header__row">
          <div class="logo header__logo"><img src="<?php echo $custom_logo_url; ?>" alt="Логотип"></div>
          <div class="contacts header__contacts">
            <ul class="contacts__list">
              <li class="contacts-item contacts__item"><img class="contacts-item__icon" src="<?php bloginfo('template_url') ?>/assets/images/map-pin-light.svg" alt="" aria-hidden="true">
                <div class="contacts-item__info"><span class="contacts-item__title"><?php the_field('address_place'); ?></span><span class="contacts-item__value"><?php the_field('address_bottom'); ?></span></div>
              </li>
              <li class="contacts-item contacts__item"><a class="contacts-item__link" href="tel:<?php echo $tel_numbers; ?>"><img class="contacts-item__icon" src="<?php bloginfo('template_url') ?>/assets/images/phone-icon-light.svg" alt="" aria-hidden="true">
                  <div class="contacts-item__info"><span class="contacts-item__title"><?php the_field('tel_numbers'); ?></span><span class="contacts-item__value"><?php the_field('tel_numbers_bottom'); ?></span></div>
                </a></li>
            </ul>
          </div>
          <button class="trigger action-btn header__get-action" type="button" data-popup-selector=".popup-form">Заказать звонок</button>
        </div>
      </div>
    </header>