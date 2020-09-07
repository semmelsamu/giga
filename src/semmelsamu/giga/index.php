<?php

$content[0] = true;

$default_values = [
    "page_size" => 0,
    "animate" => false,
    "nav__shallow" => false,
    "nav__small" => false,
    "nav__dark" => false,
    "header" => false,
    "aside" => false,
    "aside__break" => false,
    "content" => false,
    "nav" => false,
    "footer" => false,
    "path" => "giga/",
    "title" => null,
    "main_title" => null,
    "head" => null,
    "header__background" => "url('../img/default.png')",
    "header__size" => 0,
];

$content = array_replace($default_values, $content);

include("modules/base.php");

?>