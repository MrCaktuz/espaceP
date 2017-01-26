<?php
/*
        Template Name: Homepage
*/
get_header();
?>
    <header class="header">
        <div class="header__filter">
            <div class="header__titleBloc clear">
                <a class="header__logoLink" href="/espace-p"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="Lien vers l'accueil" /></a>
                <h1 class="header__title"><?php bloginfo( 'name' ); ?><span class="header__subTitle"><?php bloginfo( 'description' ); ?></span></h1>
            </div>
            <nav class="mainNav">
                <h2 class="mainNav__title hidden">Navigation principale</h2>
                <input class="mainNav__input" type="checkbox" id="toggle-nav">
                <label class="mainNav__label" for="toggle-nav"><span>Menu</span></label>
                <ul class="mainNav__list">
                    <?php foreach ( ep_get_menu_items( 'main-nav' ) as $navItem ): ?>
                        <li class="mainNav__listElt<?php echo $navItem -> isCurrent ? ' mainNav__listElt--active' : ''; ?>"><a class="mainNav__listLink" href="<?php echo $navItem -> url; ?>"><?php echo $navItem -> label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="profils">
        <h2 class="hidden">Profils</h2>
        <?php
            $posts = new WP_QUERY( [ 'post_type' => 'profiles', 'order'   => 'ASC', ] );
            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
        ?>
            <div class="profils__img profils__img--tds pageButtonImg <?php the_field( 'css_class' ); ?>">
                <a class="profils__link pageButton" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        <?php endwhile; endif; ?>
    </section>
    <section class="news">
        <h2 class="hidden">news</h2>
        <article class="news__article">
            <h3 class="news__title">Dernière news</h3>
            <?php
                $posts = new WP_QUERY( [ 'posts_per_page' => 1 ] );
                if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
            ?>
                <div class="news__content">
                    <h4 class="news__subTitle"><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                </div>

            <?php endwhile; endif; ?>
        </article>
        <article class="news__article">
            <h3 class="news__title">Actu facebook</h3>
            <div class="news__content"><?php recent_facebook_posts( array( "number" => 2, "likes" => 0, "comments" => 0, "show_page_link" => 0," show_link_previews" => 0 ) ); ?></div>
        </article>
        <a class="news__social social" href="https://www.facebook.com/espace.asbl?fref=ts">Suivez-nous sur facebook</a>
    </section>

<?php get_footer();
