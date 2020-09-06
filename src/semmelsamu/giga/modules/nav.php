<nav id="main_nav">

    <div class="inner">

        <div class="left">
            <?= $content["nav__left"]; ?>
        </div>

        <div class="right">
            <?= $content["nav__right"]; ?>
        </div>

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

    </div>

</nav>