<?php

// DEFAULT SETTINGS TO OVERWRITE - DO NOT ALTER
// Alter them in the config instead.
$default_content = [
    "path" => "./", // Path to where this file is. Needed for correctly linking the css and js files.
    "lang" => null, // HTML lang tag.
    "head" => null, // Additional content which belongs in the head can be added here.

    "title" => null,
    "main_title" => null,

    "page_size" => 0, // 0: Whole screen, 1: Part of the screen but still with aside content, 2: Part of the screen without aside content.
    "animate" => false,

    "nav" => false,
    "nav__left" => null,
    "nav__right" => null,
    "nav__shallow" => false,
    "nav__small" => false,
    "nav__dark" => false,

    "header" => false,
    "header__size" => 0, // 0: Whole screen, 1: Half the screen, 2: Only as much as the content needs
    "header__background" => null,
    "header__main" => null,
    "header__scroll_button" => false,

    "content" => false,
    "content__main" => null,

    "aside" => false,
    "aside__main" => null,
    "aside__break" => false,

    "footer" => false,
    "footer__main" => null,
];

include_once("default_content.php");

if(isset($content))
    $content = array_replace($default_content, $content);

require_once("modules/base.php");

?>