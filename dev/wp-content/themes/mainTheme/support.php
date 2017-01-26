<?php
/*
Template Name: Support
*/
get_header();
?>
    <header class="header">
        <div class="header__filter">
            <div class="header__titleBloc clear">
                <a class="header__logoLink" href="/espace-p"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="Lien vers l'accueil" /></a>
                <h1 class="header__title"><?php the_title(); ?><span class="header__subTitle">Espace P... <?php bloginfo( 'description' ); ?></span></h1>
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
    <article class="content support clear">
        <h2 class="content__title">Abonnement à notre magazine</h2>
        <div class="clear">
            <section class="content details">
                <h3 class="hidden">détailles</h3>
                <p class="support__intro"><?php echo the_field( 'optionOne' ); ?> <span class="support__price"><?php the_field( 'priceOne' ); ?>€</span></p>
                <p class="support__intro"><?php the_field( 'optionTwo' ); ?> <span class="support__price"><?php the_field( 'priceTwo' ); ?>€</span></p>
                <p class="support__whatYouGet"><?php the_field( 'conclusion' ); ?></p>
            </section>
            <section class="content formSection">
                <h3 class="hidden">Formulaire d'abonnement</h3>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </div>
    </article>

<?php get_footer(); ?>
