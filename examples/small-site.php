<?php

    // including the default content:
    include("default_content.php");

    ob_start(); 
    
?>

<h1>This is a small site.</h1>
<p>The navigation and the content are smaller.</p>

<?php 

    $content["content__main"] = ob_get_clean();

    $content["nav__small"] = true;
    $content["nav__shallow"] = true;

    include("../src/semmelsamu/giga/index.php");
    
?>