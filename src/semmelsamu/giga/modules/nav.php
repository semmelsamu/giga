<nav id="main_nav">

    <ul class="left">
        <?php if(isset($content["nav__left"])) echo $content["nav__left"]; ?>
    </ul>

    <?php if(isset($content["nav__right"])): ?>

        <ul class="right">
            <?= $content["nav__right"]; ?>
        </ul>

        <div class="button">
            <button onclick="document.getElementById('main_nav').toggleAttribute('opened');">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0 h24v24H0z" fill="none"/>
                    <path class="line line_1" d="M3 8h18v-2H3v2z"/>
                    <path class="line line_2" d="M3 13h18v-2H3v2z"/>
                    <path class="line line_3" d="M3 13h18v-2H3v2z"/>
                    <path class="line line_4" d="M3 18h18v-2H3v2z"/>
                </svg>
            </button>
        </div>

    <?php endif; ?>

</nav>