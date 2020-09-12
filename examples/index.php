<?php

    // including the default content:
    include("default_content.php");

    ob_start(); 
    
?>

<h1>Hello World!</h1>
<p>This is a possible implementation of templates.</p>

<?php 

    $content["content__main"] = ob_get_clean();

    $content["animate"] = true;
    $content["page_size"] = 0;

    $content["header"] = true;
    $content["header__main"] = "<h1>Giga Theme</h1>";
    $content["header__background"] = "url('../examples/img/pexels-eberhard-grossgasteiger-1183021.jpg')";
    $content["header__scroll_button"] = true;

    include("../src/semmelsamu/giga/index.php");
    
?>