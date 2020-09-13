<?php if($this->show): ?>
<!DOCTYPE html>

<html <?php
    if(isset($this->lang)) echo 'lang="'.$this->lang.'" ';
    echo 'page-size="'.$this->page_size.'" ';
    if($this->animate) echo "animate ";
    if($this->nav__left || $this->nav__right) echo "nav ";
    if($this->nav__shallow) echo "shallow-nav ";
    if($this->nav__small) echo "small-nav ";
    if($this->nav__dark) echo "dark-nav ";
    if($this->header) {
        echo "header ";
        echo 'header-size="'.$this->header__size.'" ';
    };
    if($this->content) echo "content ";
    if($this->aside) echo "aside ";
    if($this->aside__break) echo "break-aside ";
    if($this->footer) echo "footer ";
?>>

    <head>
        <?php include("head.php"); ?>
    </head>

    <body>

        <div id="main_wrapper">

            <div id="content_wrapper">

            <?php 
                if($this->nav__left || $this->nav__right) include("nav.php");
                if($this->header) include("header.php");

                if(($this->nav__left || $this->nav__right) && !$this->header) {
                    ?><div id="nav_placeholder"></div><?php
                }
            
                if($this->content || $this->aside): ?>
                
                    <div id="main_container">
                        <div id="content" style="margin-top: -96px; position: absolute;"></div>
                        <?php

                            if($this->content) include("content.php");
                            if($this->aside) include("aside.php");

                        ?>
                    </div>

                <?php endif;

            ?>

            </div>

            <?php if($this->footer) include("footer.php"); ?>

        </div>
        
    </body>

</html>

<?php endif; ?>