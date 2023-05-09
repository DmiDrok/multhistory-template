<?php get_header(); ?>
<main class="main">
  <section class="welcome" id="welcome">
    <div class="container welcome__container">
      <div class="welcome__row">
        <div class="welcome__text-block">
          <h1 class="welcome__title"><span class="welcome__title_top"><?php the_field('title_top'); ?></span><span class="welcome__title_bottom"><?php the_field('title_middle'); ?></span><em class="welcome__title_note"><?php the_field('title_bottom'); ?></em></h1>
          <button class="trigger red-action-btn welcome__action" type="button" data-popup-selector=".popup-form"><?php the_field('welcome_btn_text'); ?></button>
        </div>
        <div class="welcome-slider">
          <div class="welcome-slider__main swiper">
            <div class="swiper-wrapper">
            <?php
              global $post;

              $myposts = get_posts([ 
                'numberposts' => -1,
                'category_name' => 'welcome-slider',
                'order' => 'ASC',
              ]);

              if( $myposts ):
                foreach( $myposts as $post ){
                  setup_postdata( $post );
                  ?>
                    <div class="swiper-slide welcome-slider__slide"><img class="welcome-slider__slide-content" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Дети на мастер-классе"></div>
                  <?php 
                }
              endif;

              wp_reset_postdata(); // Сбрасываем $post
            ?>
              
              
            </div>
          </div>
          <div class="pagination welcome-slider__pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="what" id="what">
    <div class="container what__container">
      <div class="what__row">
        <div class="anim-decor">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/assets/images/anim-1-default.webp"><img class="anim-decor__image anim-decor__image_default" src="<?php bloginfo('template_url') ?>/assets/images/anim-1-default.png" alt="" aria-hidden="true">
          </picture>
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/assets/images/anim-1-active.webp"><img class="anim-decor__image anim-decor__image_active" src="<?php bloginfo('template_url') ?>/assets/images/anim-1-active.png" alt="" aria-hidden="true">
          </picture>
        </div>
        <h2 class="what__title"><?php the_field('what-title'); ?></h2>
        <div class="what__wrapper">
          <div class="what__text-block"><span class="what__subtitle"><?php the_field('what-textblock-title'); ?></span>
            <p class="what__text"><?php the_field('what-textblock-description'); ?></p>
            <div class="decor-image">
              <div class="decor-image__add-image-block">
                <picture>
                  <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/message-1.webp"><img class="lazy" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/message-1.png" alt="" aria-hidden="true">
                </picture>
                <p class="decor-image__text">Снимать мультики - это весело!</p>
              </div>
              <div class="decor-image__main-image-block">
                <picture>
                  <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/lumi-large.webp"><img class="lazy" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/lumi-large.png" alt="" aria-hidden="true">
                </picture>
              </div>
            </div>
          </div>
          <div class="what__grid">
            <ul class="what-list">

            <?php
              global $post;

              $myposts = get_posts([ 
                'numberposts' => -1,
                'category_name' => 'what-points',
                'order' => 'ASC',
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
                  ?>
                    <li class="what-item"><img class="what-item__icon" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" aria-hidden="true">
                      <div class="what-item__info"><span class="what-item__title"><?php the_title();; ?></span><span class="what-item__value"><?php the_field('what-point-description'); ?></span></div>
                    </li>
                <?php 
                }
              }

              wp_reset_postdata(); // Сбрасываем $post
            ?>
            </ul>
            <picture>
              <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/lumi-small.webp"><img class="lazy what__image what__image_small" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/lumi-small.png" alt="Снимать мультики - это весело!">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="actions" id="actions">
    <div class="container actions__container">
      <div class="actions__row">
        <h2 class="actions__title"><?php the_field('actions-title'); ?></h2>
        <div class="actions__grid">
          <ul class="actions-list">
            <li class="action"><span class="action__about"><?php the_field('actions-1-title'); ?></span>
              <div class="action__slider-container">
                <div class="action__slider swiper">
                  <div class="swiper-wrapper">
                  <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'actions-1',
                      'order' => 'ASC',
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                          <div class="swiper-slide"><img class="lazy" data-swiper-parallax-duration="400" data-swiper-parallax-opacity="0.5" data-swiper-parallax-scale="0.5" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Дети придумывают сюжет"></div>                        
                          <?php 
                      }
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>                    
                  </div>
                </div>
              </div>
            </li>
            <li class="action"><span class="action__about"><?php the_field('actions-2-title'); ?></span>
              <div class="action__slider-container">
                <div class="action__slider swiper">
                  <div class="swiper-wrapper">
                  <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'actions-2',
                      'order' => 'ASC',
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                          <div class="swiper-slide"><img class="lazy" data-swiper-parallax-duration="400" data-swiper-parallax-opacity="0.5" data-swiper-parallax-scale="0.5" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Дети придумывают сюжет"></div>                        
                          <?php 
                      }
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?> 
                  </div>
                </div>
              </div>
            </li>
            <li class="action"><span class="action__about"><?php the_field('actions-3-title'); ?></span>
              <div class="action__slider-container">
                <div class="action__slider swiper">
                  <div class="swiper-wrapper">
                  <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'actions-3',
                      'order' => 'ASC',
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                          <div class="swiper-slide"><img class="lazy" data-swiper-parallax-duration="400" data-swiper-parallax-opacity="0.5" data-swiper-parallax-scale="0.5" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Дети придумывают сюжет"></div>                        
                          <?php 
                      }
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?> 
                  </div>
                </div>
              </div>
            </li>
            <li class="action"><span class="action__about"><?php the_field('actions-4-title'); ?></span>
              <div class="action__slider-container">
                <div class="action__slider swiper">
                  <div class="swiper-wrapper">
                  <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'actions-4',
                      'order' => 'ASC',
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                          <div class="swiper-slide"><img class="lazy" data-swiper-parallax-duration="400" data-swiper-parallax-opacity="0.5" data-swiper-parallax-scale="0.5" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Дети придумывают сюжет"></div>                        
                          <?php 
                      }
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?> 
                  </div>
                </div>
              </div>
            </li>
            <li class="action"><span class="action__about"><?php the_field('actions-5-title'); ?></span>
              <div class="action__slider-container">
                <div class="action__slider swiper">
                  <div class="swiper-wrapper">
                  <?php
                    global $post;

                    $myposts = get_posts([ 
                      'numberposts' => -1,
                      'category_name' => 'actions-5',
                      'order' => 'ASC',
                    ]);

                    if( $myposts ){
                      foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                          <div class="swiper-slide"><img class="lazy" data-swiper-parallax-duration="400" data-swiper-parallax-opacity="0.5" data-swiper-parallax-scale="0.5" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Дети придумывают сюжет"></div>                        
                          <?php 
                      }
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?> 
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="points" id="points">
    <div class="container points__container">
      <div class="points__row">
        <h2 class="points__title"><?php the_field('advantages-title'); ?></h2>
        <div class="points__content">
          <ul class="points-list">
          <?php
            global $post;

            $myposts = get_posts([ 
              'numberposts' => -1,
              'category_name' => 'advantages',
            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
                <li class="point">
                  <div class="point__content"><span class="point__title"><?php the_title(); ?></span>
                    <p class="point__about"><?php the_content(); ?></p>
                  </div>
                </li>
                <?php 
              }
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?> 
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="heroes" id="heroes">
    <picture>
      <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-stars.webp"><img class="lazy section-bg-img heroes__bg" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-stars.png" alt="" aria-hidden="true">
    </picture>
    <div class="container heroes__container">
      <div class="heroes__row">
        <div class="anim-decor">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/assets/images/anim-2-default.webp"><img class="anim-decor__image anim-decor__image_default" src="<?php bloginfo('template_url') ?>/assets/images/anim-2-default.png" alt="" aria-hidden="true">
          </picture>
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/assets/images/anim-2-active.webp"><img class="anim-decor__image anim-decor__image_active" src="<?php bloginfo('template_url') ?>/assets/images/anim-2-active.png" alt="" aria-hidden="true">
          </picture>
        </div>
        <h2 class="heroes__title"><?php the_field('heroes-title'); ?></h2>
        <p class="heroes__subtitle"><?php the_field('heroes-description'); ?></p>
        <div class="heroes__content">
          <div class="heroes-slider swiper">
            <div class="heroes-slider__wrapper swiper-wrapper">
              <?php
                global $post;

                $myposts = get_posts([ 
                  'numberposts' => -1,
                  'category_name' => 'heroes',
                  'order' => 'ASC',
                ]);

                if ($myposts):
                  // 10 -> 8 (Ближайшее наименьшее чётное)
                  $posts_len = count($myposts);
                  while ($posts_len % 4 !== 0) {
                    $posts_len--;
                  }
                  
                  $myposts = array_slice($myposts, 0, $posts_len);
                  $slides_count = $posts_len / 4;
                  $posts = array_chunk($myposts, 4);

                  foreach ($posts as $post_chunk):
                  ?>
                    
                  <div class="heroes-slider__slide swiper-slide">
                    <?php
                      foreach($post_chunk as $post):
                      setup_postdata($post)
                    ?>
                      <img class="lazy heroes-slider__image" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Любимые герои детей">
                    <?php
                      endforeach;

                      ?>
                  </div>
                  
                  <?php
                  endforeach;
                  wp_reset_postdata();

                  endif;
                ?>
            </div>
          </div>
          <div class="pagination heroes-slider__pagination"></div>
          <div class="heroes-line">
          <?php
            global $post;

            $myposts = get_posts([ 
              'numberposts' => -1,
              'category_name' => 'heroes',
              'order' => 'ASC',
            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
                <div class="heroes-line__col"><img class="lazy" src="#" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Любимые герои детей"></div>
                <?php 
              }
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>
            <div class="heroes-line__col">
              <div class="heroes-line__description-block heroes__description-block">
                <p class="heroes__descr-text">Запишитесь на мастер-класс с любимыми героями вашего ребенка</p>
                <button class="trigger red-action-btn heroes__action" type="button" data-popup-selector=".popup-form">Записаться заранее</button>
              </div>
            </div>
          </div>
        </div>
        <div class="heroes__description-block">
          <p class="heroes__descr-text"><?php the_field('heroes-top-text-button'); ?></p>
          <button class="trigger red-action-btn heroes__action" type="button" data-popup-selector=".popup-form"><?php the_field('heroes-text-button'); ?></button>
        </div>
      </div>
    </div>
  </section>
  <section class="videos" id="videos">
    <div class="container videos__container">
      <div class="videos__row">
        <h2 class="videos__title"><?php the_field('videos-title'); ?></h2>
        <div class="videos__content">
          <a class="video-iframe-link" href="<?php the_field('videos-video-1'); ?>">
            <picture>
              <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-video.webp"><img class="lazy video-iframe-link__bg" src="#" alt="" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-video.jpg" aria-hidden="true">
            </picture>
            <div class="video-iframe-link__play-icon"></div>
          </a><a class="video-iframe-link" href="<?php the_field('videos-video-2'); ?>">
            <picture>
              <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-video.webp"><img class="lazy video-iframe-link__bg" src="#" alt="" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-video.jpg" aria-hidden="true">
            </picture>
            <div class="video-iframe-link__play-icon"></div>
          </a>
          <a class="video-iframe-link" href="<?php the_field('videos-video-3'); ?>">
            <picture>
              <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-video.webp"><img class="lazy video-iframe-link__bg" src="#" alt="" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-video.jpg" aria-hidden="true">
            </picture>
            <div class="video-iframe-link__play-icon"></div>
          </a>
          <a class="video-iframe-link" href="<?php the_field('videos-video-4'); ?>">
            <picture>
              <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-video.webp"><img class="lazy video-iframe-link__bg" src="#" alt="" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-video.jpg" aria-hidden="true">
            </picture>
            <div class="video-iframe-link__play-icon"></div>
          </a>
          <a class="video-iframe-link" href="<?php the_field('videos-video-5'); ?>">
            <picture>
              <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-video.webp"><img class="lazy video-iframe-link__bg" src="#" alt="" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-video.jpg" aria-hidden="true">
            </picture>
            <div class="video-iframe-link__play-icon"></div>
          </a></div>
      </div>
    </div>
  </section>
  <section class="events" id="events">
    <div class="container events__container">
      <div class="events__row">
        <h2 class="events__title"><?php the_field('events-title'); ?></h2>
        <div class="events__line">

        <?php
          global $post;

          $myposts = get_posts([ 
            'numberposts' => -1,
            'category_name' => 'events',
            'order' => 'ASC',
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
                <article class="event">
                  <div class="event__image-block"><img class="lazy event__image" src="data:image/gif;base64,R0lGODlhGQAQAIAAAP///wAAACH5BAEAAAEALAAAAAAZABAAAAIRjI+py+0Po5y02ouz3rz7rxUAOw==" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Праздничные мастер-классы"></div>
                  <div class="event__content-block">
                    <h3 class="event__title"><?php the_title(); ?></h3>
                    <p class="event__description"><?php the_content(); ?></p>
                  </div>
                </article>
              <?php 
            }
          }

          wp_reset_postdata(); // Сбрасываем $post
        ?>
        </div>
        <div class="events__motivation motivation">
          <div class="motivation__text-block"><span class="motivation__title"><?php the_field('events-text-title'); ?></span>
            <p class="motivation__text"><?php the_field('events-text-description'); ?></p>
          </div>
          <div class="motivation__action-block">
            <div class="motivation__action-wrapper">
              <div class="anim-decor">
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/assets/images/anim-3-default.webp"><img class="anim-decor__image anim-decor__image_default" src="<?php bloginfo('template_url') ?>/assets/images/anim-3-default.png" alt="" aria-hidden="true">
                </picture>
                <picture>
                  <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/assets/images/anim-3-active.png"><img class="anim-decor__image anim-decor__image_active" src="<?php bloginfo('template_url') ?>/assets/images/anim-3-active.png" alt="" aria-hidden="true">
                </picture>
              </div>
              <button class="trigger red-action-btn motivation__action" type="button" data-popup-selector=".popup-form"><?php the_field('events-button-text'); ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="reviews" id="reviews">
    <div class="container reviews__container">
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/attractions-bg.webp"><img class="lazy reviews__bg reviews__bg_main" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/attractions-bg.png" alt="" aria-hidden="true">
      </picture>
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/fly-1.webp"><img class="lazy reviews__bg reviews__bg_fly-1" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/fly-1.png" alt="" aria-hidden="true">
      </picture>
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/fly-2.webp"><img class="lazy reviews__bg reviews__bg_fly-2" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/fly-2.png" alt="" aria-hidden="true">
      </picture>
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/fly-3.webp"><img class="lazy reviews__bg reviews__bg_fly-3" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/fly-3.png" alt="" aria-hidden="true">
      </picture>
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/fly-4.webp"><img class="lazy reviews__bg reviews__bg_fly-4" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/fly-4.png" alt="" aria-hidden="true">
      </picture>
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/fly-5.webp"><img class="lazy reviews__bg reviews__bg_fly-5" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/fly-5.png" alt="" aria-hidden="true">
      </picture>
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/fly-6.webp"><img class="lazy reviews__bg reviews__bg_fly-6" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/fly-6.png" alt="" aria-hidden="true">
      </picture>
      <div class="reviews__row">
        <h2 class="reviews__title"><?php the_field('reviews-title'); ?></h2>
        <div class="reviews__wrapper">
          <div class="reviews__slider-container">
            <div class="reviews-slider swiper">
              <div class="reviews-slider__wrapper swiper-wrapper">

              <?php
                global $post;

                $myposts = get_posts([ 
                  'numberposts' => -1,
                  'category_name' => 'review'
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                      <article class="reviews-slider__slide review swiper-slide">
                        <h2 class="visually-hidden">Отзыв о мастер-классе</h2>
                        <div class="review__wrapper">
                          <p class="review__text">
                            <?php the_field('review-text'); ?>
                          </p><span class="review__author"><?php the_field('review-author'); ?></span>
                        </div>
                      </article>
                    <?php 
                  }
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?> 
              </div>
            </div>
            <div class="pagination reviews-slider__pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="enroll" id="enroll">
    <div class="enroll__bg-block">
      <picture>
        <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/pattern-cherries.webp"><img class="lazy section-bg-img enroll__bg" src="#" data-src="<?php bloginfo('template_url') ?>/assets/images/pattern-cherries.png" alt="" aria-hidden="true">
      </picture>
    </div>
    <div class="container enroll__container">
      <div class="enroll__row">
        <div class="enroll__line">
          <div class="form-block enroll__form-block">
            <h2 class="form-block__title"><?php the_field('form-block-title'); ?></h2>
            <form class="request-form" id="req-form" action="#" method="POST">
              <?php echo do_shortcode('[contact-form-7 id="314" title="Контактная форма"]'); ?>
              <!-- <button class="trigger red-action-btn request-form__submit" type="submit" data-popup-selector=".popup-accept"><?php the_field('form-block-button-text'); ?></button> -->
            </form>
            <div class="form-block__note">Нажимая на кнопку “<?php the_field('form-block-button-text'); ?>”, <br>вы даете согласие на обработку своих персональных данных</div>
          </div>
          <div class="decor-image">
            <div class="decor-image__add-image-block">
              <picture>
                <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/message-2.webp"><img class="lazy" src="data:image/gif;base64,R0lGODlh2QH7AIAAAP///wAAACH5BAEAAAEALAAAAADZAfsAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8btjRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cuXTr2r2LN6/evXz7+v0LOLDgwYQLGz6MOLHixYwbO34MObLkyZQrW76MObPmzZw7e/4MOrTo0aRLmz6NOrXq1axbu34NO7bs2bRr276NO7fu3bx7+/4NPLjw4cSLGz+OPLny5cybO38OPbr06dSrW7+OPbv27dy7e/8OPrz48eTLmz+PPr16wQUAADs=" data-src="<?php bloginfo('template_url') ?>/assets/images/message-2.png" alt="" aria-hidden="true">
              </picture>
              <p class="decor-image__text">
                Каждый ребенок в детстве
                ну просто обязан нарисовать дом,
                вылепить дерево
                и снять мультфильм!
              </p>
            </div>
            <div class="decor-image__main-image-block">
              <picture>
                <source type="image/webp" srcset="#" data-srcset="<?php bloginfo('template_url') ?>/assets/images/lumi-2.webp"><img class="lazy" src="data:image/gif;base64,R0lGODlhpQBxAIAAAP///wAAACH5BAEAAAEALAAAAAClAHEAAAKnjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPEycVwAAOw==" data-src="<?php bloginfo('template_url') ?>/assets/images/lumi-2.png" alt="" aria-hidden="true">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>