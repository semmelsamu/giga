<div id="header_background"><header id="main_header" style="background-image: <?= $this->header__background ?>;">

    <?php if(isset($this->header__center)): ?>

        <?php if(isset($this->header__center)): ?>

        <div class="main">
            <?= $this->header__center ?>
        </div>

        <?php endif; ?>

    <?php endif; ?>

    <?php if(isset($this->header__scroll_button) && $this->header__scroll_button): ?>

        <a class="scroll_button" href="#content"><svg width="24" height="24" viewBox="0 0 24 24">
            <path fill="white" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
            <path fill="none" d="M0 0h24v24H0V0z"/>
        </svg></a>
                        
    <?php endif; ?>

</header></div>