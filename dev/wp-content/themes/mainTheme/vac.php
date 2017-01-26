<?php
/*
        Template Name: Vaccination & Dépistage
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
                <ul class="mainNav__list">
                    <?php foreach ( ep_get_menu_items( 'main-nav' ) as $navItem ): ?>
                        <li class="mainNav__listElt<?php echo $navItem -> isCurrent ? ' mainNav__listElt--active' : ''; ?>"><a class="mainNav__listLink" href="<?php echo $navItem -> url; ?>"><?php echo $navItem -> label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>
    <nav class="secondNav">
        <h2 class="secondNav__title hidden">Navigation secondaire</h2>
        <input class="secondNav__input" type="checkbox" id="toggle-secondNav">
        <label class="secondNav__label" for="toggle-secondNav"><span>Menu interne</span></label>
        <div class="secondNav__list">
            <ol class="secondNav__intern">
                <?php if( have_rows('sections') ): ?>
                    <?php while ( have_rows('sections') ) : the_row(); ?>
                        <li class="secondNav__Elt"><a class="secondNav__link" href="#<?php the_sub_field('section_title'); ?>"><?php the_sub_field('section_title'); ?></a></li>
                <?php endwhile; endif; ?>
            </ol>
            <ol class="secondNav__extern">
                <li class="secondNav__Elt"><a class="secondNav__link" href="#legislation">Législation</a></li>
            </ol>
        </div>
    </nav>
    <article>
        <h2 class="hidden">Contenu principal</h2>
        <?php if( have_rows('sections') ): ?>
            <?php while ( have_rows('sections') ) : the_row(); ?>
                <section class="content" id="<?php the_sub_field('section_title'); ?>">
                    <h3 class="content__title"><?php the_sub_field('section_title'); ?></h3>
                    <?php if( have_rows('sub_sections') ): ?>
                        <?php while ( have_rows('sub_sections') ) : the_row(); ?>
                            <h4 class="content__subTitle"><?php the_sub_field( 'sub_section_title' ) ?></h4>
                            <?php the_sub_field( 'sub_section_content' ) ?>
                    <?php endwhile; endif; ?>
                </section>
        <?php endwhile; endif; ?>
        <section class="legislation pageButtonFilter" id="legislation">
            <h3><a class="legislation__link pageButton" href="http://mathieuclaessens.be/espace-p/?page_id=43">Un coup d'oeil sur la législation</a></h3>
        </section>
    </article>

<?php get_footer();
