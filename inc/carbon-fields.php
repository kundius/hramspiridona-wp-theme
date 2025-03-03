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

  Container::make('post_meta', 'Подробности')
    ->where('post_type', '=', 'minister')
    ->add_fields([
      Field::make('text', 'crb_rank', 'Сан'),
      Field::make('text', 'crb_description', 'Краткое описание'),
      Field::make('complex', 'crb_awards', 'Награды')->add_fields([
        Field::make('text', 'name', ''),
      ]),
    ]);

  Container::make('post_meta', 'О Храме')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-about.php')
    ->add_fields([
      Field::make('text', 'crb_temple_name', 'Название Храма'),
      Field::make('image', 'crb_temple_photo', 'Фото Храма'),
      Field::make('complex', 'crb_rites', 'Требы')->add_fields([
        Field::make('text', 'name', 'Название'),
      ]),
    ]);

  Container::make('post_meta', 'Записки')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-notes.php')
    ->add_fields([
      Field::make('complex', 'crb_commemoration_types', 'Типы помина')->add_fields([
        Field::make('text', 'name', 'Название'),
        Field::make('text', 'short', 'Короткое название'),
      ]),
    ]);

  Container::make('post_meta', 'Расписание')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-schedule.php')
    ->add_fields([
      Field::make('complex', 'crb_schedule', '')
        ->add_fields([
          Field::make('text', 'name', 'Название недели'),
          Field::make('complex', 'days', '')
            ->add_fields([
              Field::make('date', 'date', 'Дата'),
              Field::make('textarea', 'desc', 'Описание')->set_rows(2),
              Field::make('complex', 'parts', '')
                ->add_fields([
                  Field::make('text', 'name', 'Название'),
                  Field::make('complex', 'items', 'Список богослужений')
                    ->add_fields([
                      Field::make('text', 'time', 'Время')->set_width(50),
                      Field::make('text', 'name', 'Название')->set_width(50),
                    ])
                    ->setup_labels([
                      'plural_name' => 'Богослужения',
                      'singular_name' => 'Богослужение',
                    ]),
                ])
                ->set_layout('tabbed-horizontal')
                ->set_header_template('<%- name %>')
                ->setup_labels([
                  'plural_name' => 'Части суток',
                  'singular_name' => 'Часть суток',
                ]),
            ])
            ->set_layout('tabbed-horizontal')
            ->set_header_template('<%- date %>')
            ->setup_labels([
              'plural_name' => 'Дни',
              'singular_name' => 'День',
            ]),
        ])
        ->set_layout('tabbed-vertical')
        ->set_header_template('<%- name %>')
        ->setup_labels([
          'plural_name' => 'Недели',
          'singular_name' => 'Неделя',
        ]),
    ]);

  Container::make('post_meta', 'Видео')
    ->where('post_type', '=', 'preaching')
    ->add_fields([Field::make('text', 'crb_embed_url', 'Ссылка на видео')]);
}
