<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields()
{
  Container::make('theme_options', 'Параметры')
    ->set_page_parent('themes.php')
    ->add_fields([
      Field::make('text', 'crb_theme_phone', 'Телефон'),
      Field::make('text', 'crb_theme_email', 'Почта'),
      Field::make('textarea', 'crb_theme_copyright', 'Копирайт')->set_rows(2),
      Field::make('textarea', 'crb_theme_counters', 'Счетчики')->set_rows(2),
      Field::make('textarea', 'crb_theme_address', 'Адрес')->set_rows(2),
      Field::make('textarea', 'crb_theme_map', 'Карта')->set_rows(2),
      Field::make('complex', 'crb_theme_social', 'Социальные сети')->add_fields([
        Field::make('image', 'icon', 'Иконка')->set_width(50),
        Field::make('text', 'url', 'Ссылка')->set_width(50),
      ]),
      Field::make('association', 'crb_sitemap_page', 'Страница карта сайта')
        ->set_max(1)
        ->set_min(1)
        ->set_types([
          [
            'type' => 'post',
            'post_type' => 'page',
          ],
        ]),
      Field::make('association', 'crb_agreement_page', 'Страница пользовательское соглашение')
        ->set_max(1)
        ->set_min(1)
        ->set_types([
          [
            'type' => 'post',
            'post_type' => 'page',
          ],
        ]),
    ]);

  Container::make('post_meta', 'SEO')
    ->where('post_type', '=', 'page')
    ->or_where('post_type', '=', 'post')
    ->add_fields([
      Field::make('text', 'crb_seo_title', 'Заголовок'),
      Field::make('text', 'crb_seo_keywords', 'Ключевые слова'),
      Field::make('textarea', 'crb_seo_description', 'Описание'),
    ]);

  Container::make('post_meta', 'О Храме')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-about.php')
    ->add_fields([
      Field::make('complex', 'crb_rites', 'Требы')->add_fields([
        Field::make('text', 'name', 'Название'),
      ]),
    ]);
}
