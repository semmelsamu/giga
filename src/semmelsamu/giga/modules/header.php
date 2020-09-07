<div style="background-color: #000000;"><header id="main_header" <?php 
    if(isset($content["header__background"])): ?>style="background-image: <?= $content["header__background"] ?>;"<?php endif; ?>>

    <div class="inner">
    
        <?php if(isset($content["header__main"])): ?>

            <?php if(isset($content["header__main"])): ?>

            <div class="main">
                <?= $content["header__main"] ?>
            </div>

            <?php endif; ?>

        <?php endif; ?>

        <?php if(isset($content["header__scroll_button"]) && $content["header__scroll_button"]): ?>

            <a class="scroll_button" href="#content"><svg width="24" height="24" viewBox="0 0 24 24">
                <path fill="white" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                <path fill="none" d="M0 0h24v24H0V0z"/>
            </svg></a>
                            
        <?php endif; ?>

    </div>

</header></div>