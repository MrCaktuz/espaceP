<?php
/*
Template Name: Partner
*/
get_header();
?>

    <header class="header">
        <div class="header__filter">
            <div class="header__titleBloc clear">
                <a class="header__logoLink" href="/index.html"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="Lien vers l'accueil" /></a>
                <h1 class="header__title"><?php the_title(); ?><span class="header__subTitle">Espace P... <?php bloginfo( 'description' ); ?></span></h1>
            </div>
            <nav class="mainNav">
                <h2 class="mainNav__title hidden">Navigation principale</h2>
                <input class="mainNav__input" type="checkbox" id="toggle-nav">
                <label class="mainNav__label" for="toggle-nav"><span>Menu</span></label>
                <ul class="mainNav__list">
                    <?php foreach ( ep_get_menu_items( 'main-nav' ) as $navItem ): ?>
                        <li class="mainNav__listElt<?php echo $navItem -> isCurrent ? ' mainNav__listElt--active' : ''; ?>"><a class="mainNav__listLink" target="_blank" href="<?php echo $navItem -> url; ?>"><?php echo $navItem -> label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="buttons">
        <?php if (have_posts()) : ?>
            <div class="buttons__intro">
                <?php while (have_posts()) : the_post(); ?>
                    <?php echo the_content(); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php
            $posts = new WP_QUERY( [ 'post_type' => 'partners' ] );
            if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
        ?>
            <div class="buttons__img buttons__img--partner pageButtonImg">
                <a class="buttons__link pageButton" href="<?php the_field( 'url' ); ?>"><?php the_title(); ?></a>
            </div>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>
