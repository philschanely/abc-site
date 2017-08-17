</main>
        <footer>
            <h1><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/pics/logo-white.png"></a></h1>
            <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'bottom',
                    'container' => false
                )); 
            ?>
            <ul class="church-info">
                    <li>2900 W Main St, Richmond, IN 47374</li>
                    <li>(765) 935-7783</li>
                    <li>Give Now</li>
            </ul>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>