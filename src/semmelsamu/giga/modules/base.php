<!DOCTYPE html>

<html <?php
    if(isset($content["lang"])) echo 'lang="'.$content["lang"].'" ';
    echo 'page-size="'.$content["page_size"].'" ';
    if($content["animate"]) echo "animate ";
    if($content["nav"]) echo "nav ";
    if($content["nav__shallow"]) echo "shallow-nav ";
    if($content["nav__small"]) echo "small-nav ";
    if($content["nav__dark"]) echo "dark-nav ";
    if($content["header"]) {
        echo "header ";
        echo 'header-size="'.$content["header__size"].'" ';
    };
    if($content["content"]) echo "content ";
    if($content["aside"]) echo "aside ";
    if($content["aside__break"]) echo "break-aside ";
    if($content["footer"]) echo "footer ";
?>>

    <head>
        <?php include("head.php"); ?>
    </head>

    <body>

        <div id="main_wrapper">

            <div id="content_wrapper">

            <?php 
                if($content["nav"]) include("nav.php");
                if($content["header"]) include("header.php");

                if($content["nav"] && !$content["header"]) {
                    ?><div id="nav_placeholder"></div><?php
                }
            
                if($content["content"] || $content["aside"]): ?>
                
                    <div id="main_container">
                        <div id="content" style="margin-top: -64px; position: absolute;"></div>
                        <?php

                            if($content["content"]) include("content.php");
                            if($content["aside"]) include("aside.php");

                        ?>
                    </div>

                <?php endif;

            ?>

            </div>

            <?php if($content["footer"]) include("footer.php"); ?>

        </div>
        
    </body>

</html>