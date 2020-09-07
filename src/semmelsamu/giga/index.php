<!DOCTYPE html>

<html <?php
    if(isset($content["lang"])) echo 'lang="'.$content["lang"].'" ';
    if(isset($content["page_size"])) echo 'page-size="'.$content["page_size"].'" ';
    if(isset($content["animate"]) && $content["animate"]) echo "animate ";
    if(isset($content["nav"]) && $content["nav"]) echo "nav ";
    if(isset($content["nav__shallow"]) &&$content["nav__shallow"]) echo "shallow-nav ";
    if(isset($content["nav__small"]) && $content["nav__small"]) echo "small-nav ";
    if(isset($content["nav__dark"]) && $content["nav__dark"]) echo "dark-nav ";
    if(isset($content["header"]) && $content["header"]) {
        echo "header ";
        echo 'header-size="'.$content["header__size"].'" ';
    };
    if(isset($content["content"]) && $content["content"]) echo "content ";
    if(isset($content["aside"]) && $content["aside"]) echo "aside ";
    if(isset($content["aside__break"]) && $content["aside__break"]) echo "break-aside ";
    if(isset($content["footer"]) && $content["footer"]) echo "footer ";
?>>

    <head>
        <?php include("modules/head.php"); ?>
    </head>

    <body>

        <div id="main_wrapper">

            <div id="content_wrapper">

            <?php 
                if(isset($content["nav"]) && $content["nav"]) include("modules/nav.php");
                if(isset($content["header"]) && $content["header"]) include("modules/header.php");

                if((isset($content["nav"]) && $content["nav"]) && (!$content["header"] || !isset($content["header"]))) {
                    ?><div style="width: 100%; height: 96px; display: block;"></div><?php
                }
            
                if((isset($content["content"]) && $content["content"]) || (isset($content["aside"]) && $content["aside"])): ?>
                
                    <div id="main_container">
                        <div id="content" style="margin-top: -64px; position: absolute;"></div>
                        <?php

                            if(isset($content["content"]) && $content["content"]) include("modules/content.php");
                            if(isset($content["aside"]) && $content["aside"]) include("modules/aside.php");

                        ?>
                    </div>

                <?php endif;

            ?>

            </div>

            <?php if(isset($content["footer"]) && $content["footer"]) include("modules/footer.php"); ?>

        </div>
        
    </body>

</html>