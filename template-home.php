<?php
/*
Template Name: Главная
*/
$preachings = new WP_Query([
  'post_type' => 'preaching',
  'orderby' => [
    'menu_order' => 'ASC',
  ],
  'posts_per_page' => 6,
]);

$schedule_days = [];
if ($crb_schedule = carbon_get_post_meta(107, 'crb_schedule')) {
  foreach ($crb_schedule as $week) {
    if ($days = $week['days']) {
      foreach ($days as $day) {
        print_r($day['date'] . '/' . strtotime('now') . '/' . strtotime($day['date']));
        if (strtotime('now') <= strtotime($day['date'])) {
          $schedule_days[] = $day;
        }
      }
    }
  }
}
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
            Храм Святителя<br>
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
              Святитель Спиридон Тримифунтский
            </div>
            <div class="home-about__more">
              <a href="<?php the_permalink(
                118
              ); ?>" class="ui-more">Подробнее<span class="ui-more__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-schedule-section">
      <div class="container">
        <div class="home-schedule-section__title">
          Расписание богослужений в храме<br>
          Святителя Спиридона Тримифунтского
        </div>

        <div class="schedule-carousel">
          <div class="schedule-carousel__view" data-schedule-carousel>
            <div class="schedule-carousel__container">

                <?php foreach ($schedule_days as $day):

                  $week_n = wp_date('N', strtotime($day['date']));
                  $cls = '';
                  if ($week_n == '7' || $week_n == '6') {
                    $cls = ' schedule-item_weekend';
                  }
                  ?>
                    <div class="schedule-carousel__slide">
                        <div class="schedule-item<?php echo $cls; ?>">
                            <div class="schedule-item__title">
                                <?php echo wp_date('l', strtotime($day['date'])); ?>
                            </div>
                            <div class="schedule-item__date">
                                <?php echo wp_date('j F Y', strtotime($day['date'])); ?>
                            </div>
                            <div class="schedule-item__desc">
                                <?php echo $day['desc']; ?>
                            </div>
                            <?php if ($parts = $day['parts']): ?>
                            <div class="schedule-item__rows">
                                <?php foreach ($parts as $part): ?>
                                <div class="schedule-item__row">
                                    <div class="schedule-item__row-title">
                                        <?php echo $part['name']; ?>
                                    </div>
                                    <?php if ($items = $part['items']): ?>
                                    <?php foreach ($items as $item): ?>
                                    <div class="schedule-item__row-content">
                                        <div class="schedule-item__row-time">
                                            <?php echo $item['time']; ?>
                                        </div>
                                        <div class="schedule-item__row-arrow"></div>
                                        <div class="schedule-item__row-name">
                                            <?php echo $item['name']; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endforeach; ?>

            </div>
          </div>

          <button type="button" data-schedule-carousel-prev class="carousel__nav-prev"></button>
          <button type="button" data-schedule-carousel-next class="carousel__nav-next"></button>
        </div>

        <div class="home-schedule-section__more">
          <a href="<?php the_permalink(107); ?>" class="ui-more">Полное расписание</a>
        </div>
      </div>
    </div>

    <?php if ($preachings->have_posts()): ?>
    <div class="home-preaching-section">
      <div class="container">
        <div class="home-preaching-section__headline">
          <div class="home-preaching-section__headline-content">
            <div class="home-preaching-section__headline-title">
              Проповеди
            </div>
            <a href="<?php the_permalink(
              90
            ); ?>" class="home-preaching-section__headline-more">смотреть все</a>
          </div>
        </div>

        <div class="home-preaching-carousel">
            <div class="home-preaching-carousel__view" data-home-preaching-carousel>
                <div class="home-preaching-carousel__container">
                    <?php while ($preachings->have_posts()): ?>
                    <?php $preachings->the_post(); ?>
                    <div class="home-preaching-carousel__slide">
                        <div class="home-preaching-section__item">
                            <a href="#video-<?php echo get_the_ID(); ?>" target="_blank" data-fslightbox="gallery" class="home-preaching-section__item-link">
                                <?php the_post_thumbnail('original'); ?>
                                <span class="home-preaching-section__item-play"></span>
                            </a>
                            <?php if (
                              $crb_embed_url = carbon_get_the_post_meta('crb_embed_url')
                            ): ?>
                            <div class="hidden">
                                <iframe
                                src="<?php echo $crb_embed_url; ?>"
                                id="video-<?php echo get_the_ID(); ?>"
                                width="1920px"
                                height="1080px"
                                frameBorder="0"
                                allow="fullscreen"
                                allowFullScreen></iframe>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>

            <button type="button" data-home-preaching-carousel-prev class="carousel__nav-prev"></button>
            <button type="button" data-home-preaching-carousel-next class="carousel__nav-next"></button>
        </div>

        <div class="home-preaching-section__more">
          <a href="<?php the_permalink(
            90
          ); ?>" class="ui-more">Подробнее<span class="ui-more__arrow"></span></a>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="home-music-section">
      <div class="container">
        <div class="home-music">
          <div class="home-music__title">strannik-music</div>
          <div class="home-music__desc">Духовные канты отца Геннадия — о трудном пути человека&nbsp;к&nbsp;покаянию,<br> о&nbsp;заблудшем и&nbsp;пробуждающемся к&nbsp;познанию Бога сердце, о&nbsp;земных и&nbsp;небесных странствиях души&nbsp;к&nbsp;Богу</div>
          <div class="home-music__more">
            <a href="<?php the_permalink(
              116
            ); ?>" class="ui-more">Подробнее<span class="ui-more__arrow"></span></a>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
