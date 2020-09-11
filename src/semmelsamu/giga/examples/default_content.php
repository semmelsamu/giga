<?php

    $content["path"] = "../";
    $content["main_title"] = "Giga Theme";
    $content["page_size"] = 1;

    $content["content"] = true;
    $content["show"] = true;

    $content["nav"] = true;
    $content["nav__left"] = '<a href="index.php">'.$content["main_title"].'</a>';

    ob_start();

?>

<li><a href="small-site.php">Small site</a></li>

<?php

    $content["nav__right"] = ob_get_clean();

    $content["footer"] = true;
    $content["footer__main"] = 'This example was made by Samuel Kroiß. <a href="https://github.com/semmelsamu/giga" target="_blank">GitHub</a>';

?>