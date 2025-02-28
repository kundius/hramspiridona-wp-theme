<?php
/*
Template Name: Главная
*/
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-screen">
    <?php get_template_part('partials/header'); ?>

    <div class="home-intro">
      <div class="container">
        <div class="home-intro__content">
          <div class="home-intro__desc">
            Русская Православная Церковь
          </div>
          <div class="home-intro__title">
            Храм Святого<br>
            Спиридона<br>
            Тримифунтского
          </div>
        </div>
        <div class="home-intro__arrow"></div>
      </div>
    </div>

    <div class="home-about-section">
      <div class="container">
        <div class="home-about">
          <div class="home-abount__content">
            <div class="home-about__desc">
              По благословению Высокопреосвященнейшего ЛЕОНТИЯ, митрополита Воронежского и Лискинского
            </div>
            <div class="home-about__title">
              Святой Спиридон Тримифунтский
            </div>
            <div class="home-about__more">
              <a href="" class="ui-more">Подробнее<span class="ui-more__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-schedule-section">
      <div class="container">
        <div class="home-schedule-section__title">
          Расписание богослужений в храме<br>
          Святого Спиридона Тримифунтского
        </div>

        <div class="schedule-carousel">
          <div class="schedule-carousel__view" data-schedule-carousel>
            <div class="schedule-carousel__container">

              <div class="schedule-carousel__slide">
                <div class="schedule-item">
                  <div class="schedule-item__title">Понедельник</div>
                  <div class="schedule-item__date">24 февраля 2025</div>
                  <div class="schedule-item__rows">
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Утро
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Вечер
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="schedule-carousel__slide">
                <div class="schedule-item">
                  <div class="schedule-item__title">Понедельник</div>
                  <div class="schedule-item__date">24 февраля 2025</div>
                  <div class="schedule-item__rows">
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Утро
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Вечер
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="schedule-carousel__slide">
                <div class="schedule-item">
                  <div class="schedule-item__title">Понедельник</div>
                  <div class="schedule-item__date">24 февраля 2025</div>
                  <div class="schedule-item__rows">
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Утро
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Вечер
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="schedule-carousel__slide">
                <div class="schedule-item">
                  <div class="schedule-item__title">Понедельник</div>
                  <div class="schedule-item__date">24 февраля 2025</div>
                  <div class="schedule-item__rows">
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Утро
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Вечер
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="schedule-carousel__slide">
                <div class="schedule-item">
                  <div class="schedule-item__title">Понедельник</div>
                  <div class="schedule-item__date">24 февраля 2025</div>
                  <div class="schedule-item__rows">
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Утро
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                    <div class="schedule-item__row">
                      <div class="schedule-item__row-title">
                        Вечер
                      </div>
                      <div class="schedule-item__row-content">
                        <div class="schedule-item__row-time">
                          08.00
                        </div>
                        <div class="schedule-item__row-arrow"></div>
                        <div class="schedule-item__row-name">
                          Исповедь, литургия
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <button type="button" data-schedule-carousel-prev class="carousel__nav-prev"></button>
          <button type="button" data-schedule-carousel-next class="carousel__nav-next"></button>
        </div>

        <div class="home-schedule-section__more">
          <a href="" class="ui-more">Полное расписание</a>
        </div>
      </div>
    </div>

    <div class="home-preaching-section">
      <div class="container">
        <div class="home-preaching-section__headline">
          <div class="home-preaching-section__headline-content">
            <div class="home-preaching-section__headline-title">
              Проповеди
            </div>
            <a href="" class="home-preaching-section__headline-more">смотреть все</a>
          </div>
        </div>

        <div class="home-preaching-carousel">
            <div class="home-preaching-carousel__view" data-home-preaching-carousel>
                <div class="home-preaching-carousel__container">
                    <div class="home-preaching-carousel__slide">
                        <div class="home-preaching-section__item">
                            <a href="#video-0" target="_blank" data-fslightbox="gallery" class="home-preaching-section__item-link">
                            <img width="480" height="320" src="https://xn----8sbbbsrepehoee0qnah.xn--p1ai/wp-content/uploads/2024/12/01-gotovaya-banya-pod-klyuch-skandinaviya-7-2_3-480x320.jpg" alt="" decoding="async" loading="lazy" class="home-preaching-section__item-image">
                            <span class="home-preaching-section__item-play"></span>
                            </a>
                            <div class="hidden">
                            <iframe src="https://rutube.ru/play/embed/af32a23a57e09654b12ad4407000f8c7/" id="video-0" width="1920px" height="1080px" frameborder="0" allow="fullscreen" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="home-preaching-carousel__slide">
                        <div class="home-preaching-section__item">
                            <a href="#video-0" target="_blank" data-fslightbox="gallery" class="home-preaching-section__item-link">
                            <img width="480" height="320" src="https://xn----8sbbbsrepehoee0qnah.xn--p1ai/wp-content/uploads/2024/12/01-gotovaya-banya-pod-klyuch-skandinaviya-7-2_3-480x320.jpg" alt="" decoding="async" loading="lazy" class="home-preaching-section__item-image">
                            <span class="home-preaching-section__item-play"></span>
                            </a>
                            <div class="hidden">
                            <iframe src="https://rutube.ru/play/embed/af32a23a57e09654b12ad4407000f8c7/" id="video-0" width="1920px" height="1080px" frameborder="0" allow="fullscreen" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="home-preaching-carousel__slide">
                        <div class="home-preaching-section__item">
                            <a href="#video-0" target="_blank" data-fslightbox="gallery" class="home-preaching-section__item-link">
                            <img width="480" height="320" src="https://xn----8sbbbsrepehoee0qnah.xn--p1ai/wp-content/uploads/2024/12/01-gotovaya-banya-pod-klyuch-skandinaviya-7-2_3-480x320.jpg" alt="" decoding="async" loading="lazy" class="home-preaching-section__item-image">
                            <span class="home-preaching-section__item-play"></span>
                            </a>
                            <div class="hidden">
                            <iframe src="https://rutube.ru/play/embed/af32a23a57e09654b12ad4407000f8c7/" id="video-0" width="1920px" height="1080px" frameborder="0" allow="fullscreen" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="home-preaching-carousel__slide">
                        <div class="home-preaching-section__item">
                            <a href="#video-0" target="_blank" data-fslightbox="gallery" class="home-preaching-section__item-link">
                            <img width="480" height="320" src="https://xn----8sbbbsrepehoee0qnah.xn--p1ai/wp-content/uploads/2024/12/01-gotovaya-banya-pod-klyuch-skandinaviya-7-2_3-480x320.jpg" alt="" decoding="async" loading="lazy" class="home-preaching-section__item-image">
                            <span class="home-preaching-section__item-play"></span>
                            </a>
                            <div class="hidden">
                            <iframe src="https://rutube.ru/play/embed/af32a23a57e09654b12ad4407000f8c7/" id="video-0" width="1920px" height="1080px" frameborder="0" allow="fullscreen" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-home-preaching-carousel-prev class="carousel__nav-prev"></button>
            <button type="button" data-home-preaching-carousel-next class="carousel__nav-next"></button>
        </div>

        <div class="home-preaching-section__more">
          <a href="" class="ui-more">Подробнее<span class="ui-more__arrow"></span></a>
        </div>
      </div>
    </div>

    <div class="home-music-section">
      <div class="container">
        <div class="home-music">
          <div class="home-music__title">strannik-music</div>
          <div class="home-music__desc">Духовные канты отца Геннадия — о трудном пути человека&nbsp;к&nbsp;покаянию,<br> о&nbsp;заблудшем и&nbsp;пробуждающемся к&nbsp;познанию Бога сердце, о&nbsp;земных и&nbsp;небесных странствиях души&nbsp;к&nbsp;Богу</div>
          <div class="home-music__more">
            <a href="" class="ui-more">Подробнее<span class="ui-more__arrow"></span></a>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
