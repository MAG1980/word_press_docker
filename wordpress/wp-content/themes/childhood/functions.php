<?php
//Добавить действие при срабоатывании хука, подключающего стили и скрипты
//Первый параметр - отслеживаемый хук, второй - название функции, которая должна вызываться
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles()
{
    //Подключение стилей: название файла, путь к файлу (функция, возвращающая путь к главному файлу стилей темы)
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
    //get_template_directory_uri() - путь к каталогу, содержащему файлы темы.
  /*  wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css');
    wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');*/
}
function childhood_scripts()
{
    //Массив зависимостей, которые должны быть загружены до исполнения данного скрипта, например, jquery.
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', [],null, true);
}