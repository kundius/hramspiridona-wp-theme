<?php
/*
Template Name: Записки
*/
$types = carbon_get_the_post_meta('crb_commemoration_types'); ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-screen">
    <?php get_template_part('partials/header', null, ['placeholder' => true]); ?>

    <div class="pb-12 md:pb-16 lg:pb-24">
        <div class="container">
            <div class="breadcrumbs">
                <a href="<?php echo get_the_permalink(2); ?>" class="breadcrumbs__link">
                    <?php echo get_the_title(2); ?>
                </a>
                <span class="breadcrumbs__separator"></span>
                <span class="breadcrumbs__current"><?php the_title(); ?></span>
            </div>

            <h1 class="page-title mb-8"><?php the_title(); ?></h1>

            <div class="page-content content mb-12 md:mb-16"><?php the_content(); ?></div>

            <div class="notes-form">
                <div class="notes-form__container">
                    <div class="notes-form__title">
                        Подать записки онлайн
                    </div>
                    <div class="notes-form__layout">
                        <div class="notes-form__layout-name">
                            <div class="notes-form-field">
                                <label class="notes-form-field__label">
                                    Укажите свои фамилию и имя
                                </label>
                                <div class="notes-form-field__control">
                                    <input type="text" class="notes-form-field__input" placeholder="Представьтесь">
                                </div>
                            </div>
                        </div>
                        <div class="notes-form__layout-type">
                            <?php if ($types): ?>
                            <div class="notes-form-field">
                                <label class="notes-form-field__label">
                                    Выберите тип помина
                                </label>
                                <div class="notes-form-field__control">
                                    <select class="notes-form-field__select">
                                        <?php foreach ($types as $key => $type): ?>
                                        <option value="<?php echo $type['name']; ?>">
                                            <?php echo $type['name']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="notes-form__layout-list">
                            <div class="notes-form-list">
                                <div class="notes-form-list__title">
                                    В полях ниже введите имена поминаемых:
                                </div>
                                <div class="notes-form-list__blank">
                                    <div class="notes-form-list__frame">
                                        <div class="notes-form-list__frame-top"></div>
                                        <div class="notes-form-list__frame-middle">
                                            <div class="notes-form-list__headline">
                                                Тип помина
                                            </div>
                                            <div class="notes-form-list__items">
                                                <div class="notes-form-list__item">
                                                    <input type="text" class="notes-form-list__input" placeholder="Введите здесь имя поминаемого">
                                                </div>
                                                <div class="notes-form-list__item">
                                                    <input type="text" class="notes-form-list__input" placeholder="Введите здесь имя поминаемого">
                                                </div>
                                                <div class="notes-form-list__item">
                                                    <input type="text" class="notes-form-list__input" placeholder="Введите здесь имя поминаемого">
                                                </div>
                                                <div class="notes-form-list__item">
                                                    <input type="text" class="notes-form-list__input" placeholder="Введите здесь имя поминаемого">
                                                </div>
                                                <div class="notes-form-list__item">
                                                    <input type="text" class="notes-form-list__input" placeholder="Введите здесь имя поминаемого">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notes-form-list__frame-bottom"></div>
                                    </div>
                                </div>
                                <div class="notes-form-list__add">
                                    <button type="button" class="notes-form-list__add-button">
                                        <span class="notes-form-list__add-icon"><span></span></span>
                                        <span class="notes-form-list__add-text">Добавить имя</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="notes-form__layout-submit">
                            <button type="submit" class="notes-form__submit">Подать записку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
