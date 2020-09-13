<?php

    include("../src/semmelsamu/giga/index.php");

    $theme = new Giga();

    include("default_content.php");

    $theme->title = "Demo";

    $theme->animate = true;

    $theme->header = true;
    $theme->header__center = "<h1>Giga Theme</h1>";
    $theme->header__background = "url('img/pexels-eberhard-grossgasteiger-1183021.jpg')";

    $theme->content = "Hello World!";

    $theme->render();

?>