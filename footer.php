        </main>
        <footer>
            <h1><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/pics/logo-white.png"></a></h1>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'bottom',
                    'container' => false
                ));
            ?>
            <div class="church-info">
                <p><span class="address">2900 W Main St, Richmond, IN 47374</span> <span class="phone">(765) 935-7783</span></p>
            </div>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>
