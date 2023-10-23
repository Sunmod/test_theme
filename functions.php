<?php
// Это файл вызова и подключения скриптов и функций. Интересно обозвали "Файл управления полетами"

// Добавление хука, который вызывает функцию script_styles и запускает подключение стилей
add_action('wp_enqueue_scripts' , 'script_styles');
function script_styles() {
    //подключение стилей
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' );

    //поедлючение скриптов (если бы они были). Назвывается script, потому что так называется js файл, делаем это что бы самим не запутаться
    //а вообще название может быть любое
    //array нужен, если скрипт зависим от другого. Представим, что да и я пишу array('some_script'). Тоесть script заработает если заработает some_script
    //там где null - пишется условная версия '1.0.0'
    //true означает, что скрипт выполняется в footer
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('some_script'), 'null', true);
    //подключение jquery проводится по другому, загуглить!
}

// посты поддерживают картинки
add_theme_support('post-thumbnails');
// управление Title tag
add_theme_support('title-tag');
// заменя логотипа
add_theme_support('custom-logo');