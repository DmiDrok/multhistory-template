<footer class="footer" id="footer">
      <div class="container footer__container">
        <div class="footer__row">
          <div class="footer__wrapper-top">
            <div class="logo footer__logo"><img src="<?php the_field('logo_alternative'); ?>" alt="логотип"></div>
            <div class="contacts footer__contacts">
              <ul class="contacts__list">
                <li class="contacts-item contacts__item"><a class="contacts-item__link">
                    <div class="contacts-item__icon-block"><img class="contacts-item__icon" src="<?php bloginfo('template_url') ?>/assets/images/map-pin-light.svg" alt="" aria-hidden="true"></div>
                    <div class="contacts-item__info"><span class="contacts-item__title"><?php the_field('address_place'); ?></span><span class="contacts-item__value"><?php the_field('address_bottom'); ?></span></div>
                  </a></li>
                <li class="contacts-item contacts__item"><a class="contacts-item__link" href="tel:<?php echo the_field('tel_numbers'); ?>">
                    <div class="contacts-item__icon-block"><img class="contacts-item__icon" src="<?php bloginfo('template_url'); ?>/assets/images/phone-icon-light.svg" alt="" aria-hidden="true"></div>
                    <div class="contacts-item__info"><span class="contacts-item__title"><?php the_field('tel_numbers'); ?></span><span class="contacts-item__value"><?php the_field('tel_numbers_bottom'); ?></span></div>
                  </a></li>
                <li class="contacts-item contacts__item large"><a class="contacts-item__link" href="<?php the_field('inst_link'); ?>"><img class="contacts-item__icon large__icon" src="<?php bloginfo('template_url') ?>/assets/images/inst-large-icon.svg" alt="" aria-hidden="true"></a>
                  <div class="contacts-item__info"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom"><a href="<?php the_field('inst_link'); ?>" title="Наш инстаграмм"><img src="<?php bloginfo('template_url') ?>/assets/images/inst-small-icon.svg" alt="Наш инстаграмм"></a><span>2016 - <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span></div>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>