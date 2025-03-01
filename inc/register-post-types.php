<?php
add_action('init', 'register_post_types');

function register_post_types()
{
  register_post_type('shrine', [
    'label' => null,
    'labels' => [
      'name' => 'Святыня', // основное название для типа записи
      'singular_name' => 'Святыня', // название для одной записи этого типа
      'add_new' => 'Добавить святыню', // для добавления новой записи
      'add_new_item' => 'Добавление святыни', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item' => 'Редактирование святыню', // для редактирования типа записи
      'new_item' => 'Новае святыня', // текст новой записи
      'view_item' => 'Смотреть святыню', // для просмотра записи этого типа.
      'search_items' => 'Искать святыню', // для поиска по этим типам записи
      'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon' => '', // для родителей (у древовидных типов)
      'menu_name' => 'Святыни', // название меню
    ],
    'description' => '',
    'public' => true,
    'show_in_menu' => null, // показывать ли в меню админки
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => null,
    'menu_icon' => 'dashicons-media-document',
    'hierarchical' => false,
    'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => [],
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ]);
}
