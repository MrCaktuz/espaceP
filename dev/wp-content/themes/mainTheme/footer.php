
    <footer class="footer clear">
        <nav class="footer__nav clear">
            <h2 class="hidden">Navigation de pied de page</h2>
            <ul class="footer__list footer__col">
                <?php foreach ( ep_get_menu_items( 'main-nav' ) as $navItem ): ?>
                    <li class="footer__listElt"><a class="footer__listLink" href="<?php echo $navItem -> url; ?>"><?php echo $navItem -> label ?></a></li>
                <?php endforeach; ?>
            </ul>
            <ul class="footer__list footer__col">
                <?php
                    $posts = new WP_QUERY( [ 'post_type' => 'profiles' ] );
                    if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                ?>
                    <li class="footer__listElt"><a class="footer__listLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
            </ul>
            <a class="footer__social footer__col social" href="https://www.facebook.com/espace.asbl?fref=ts">Suivez-nous sur facebook</a>
        </nav>
        <small class="footer__copy">&copy; espace P... 2016 - Site réalisé par <a class="footer__copyLink" href="http://mathieuclaessens.be">Mathieu Claessens</a></small>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>
