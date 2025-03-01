<?php
/*
Template Name: О Храме
*/
$shrines = new WP_Query([
  'post_type' => 'shrine',
  'orderby' => [
    'is_sticky' => 'DESC',
    'date' => 'DESC',
  ],
  'posts_per_page' => -1,
]); ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-screen">
    <?php get_template_part('partials/header', null, ['placeholder' => true]); ?>

    <div class="page-section">
        <div class="container page-section__container">
            <div class="page-section__breadcrumbs">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>" class="breadcrumbs__link">Главная</a>
                    <span class="breadcrumbs__separator"></span>
                    <span class="breadcrumbs__current"><?php the_title(); ?></span>
                </div>
            </div>

            <h1 class="page-section__title"><?php the_title(); ?></h1>

            <div class="page-section__content content"><?php the_content(); ?></div>

            <?php if ($shrines->have_posts()): ?>
            <div class="shrine-carousel">
                <div class="shrine-carousel__view" data-shrine-carousel>
                    <div class="shrine-carousel__container">
                        <?php while ($shrines->have_posts()): ?>
                        <?php $shrines->the_post(); ?>
                        <div class="shrine-carousel__slide">
                            <article class="shrine-card">
                                <figure class="shrine-card__image">
                                    <?php the_post_thumbnail('original'); ?>
                                </figure>
                                <div class="shrine-card__title"><?php the_title(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="shrine-card__details">Подробнее</a>
                            </article>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>

                <button type="button" data-shrine-carousel-prev class="carousel__nav-prev"></button>
                <button type="button" data-shrine-carousel-next class="carousel__nav-next"></button>
            </div>
            <?php endif; ?>

            <?php if ($crb_rites = carbon_get_the_post_meta('crb_rites')): ?>
            <div class="rites">
                <div class="rites__title">Требы</div>
                <div class="rites__items">
                    <?php foreach ($crb_rites as $key => $crb_rite): ?>
                    <div class="rites__item">
                        <div class="rites__item-text">
                            <?php echo $crb_rite['name']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
