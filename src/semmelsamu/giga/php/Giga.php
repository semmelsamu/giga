<?php

    class Giga {

        function __construct() {

            // Default values
            $this->path = "giga/";

            $this->title = null;
            $this->main_title = null;

            $this->show = false;
            $this->page_size = 0;
            $this->animate = false;

            $this->head = null;
            $this->icon = false;

            $this->nav__left = false;
            $this->nav__right = false;
            $this->nav__shallow = false;
            $this->nav__small = false;
            $this->nav__dark = false;

            $this->header = false;
            $this->header__background = "url('../img/default.png')";
            $this->header__size = 0;
            
            $this->content = false;
            $this->content__show_heading = false;

            $this->aside = false;
            $this->aside__break = false;
            
            $this->footer = false;

        }

        function render() {
            include("modules/base.php");
        }

    }

?>