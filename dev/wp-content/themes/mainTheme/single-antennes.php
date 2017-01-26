<?php
/*
        Template Name: Antenne
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
    <div class="antenne clear">
        <section class="contact content">
            <h2 class="hidden">Formulaire de contact</h2>
            <section class="contact__form">
                <h3 class="antenne__title">Nous contacter</h3>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </section>
        <section class="about content">
            <h2 class="hidden">À propos de cette antenne</h2>
            <section class="team">
                <h3 class="antenne__title">Notre équipe</h3>
                <ul class="team__list">
                    <?php if( have_rows('members') ): ?>
                        <?php while ( have_rows('members') ) : the_row(); ?>
                        <li class="team__member"><?php the_sub_field('member_name'); ?> <span class="team__function"><?php the_sub_field('member_function'); ?></span></li>
                    <?php endwhile; endif; ?>
                </ul>
            </section>
            <section class="schedule">
                <h3 class="antenne__title">Nos horaires</h3>
                <ol class="schedule__list">
                    <li class="schedule__day">Lundi <span class="schedule__time"><?php the_field( 'monday' ); ?></span></li>
                    <li class="schedule__day">Mardi <span class="schedule__time"><?php the_field( 'tuesday' ); ?></span></li>
                    <li class="schedule__day">Mercredi <span class="schedule__time"><?php the_field( 'wednesday' ); ?></span></li>
                    <li class="schedule__day">Jeudi <span class="schedule__time"><?php the_field( 'thursday' ); ?></span></li>
                    <li class="schedule__day">Vendredi <span class="schedule__time"><?php the_field( 'friday' ); ?></span></li>
                    <li class="schedule__day">Samedi <span class="schedule__time"><?php the_field( 'saturday' ); ?></span></li>
                    <li class="schedule__day">Dimanche <span class="schedule__time"><?php the_field( 'sunday' ); ?></span></li>
                </ol>
            </section>
            <section class="address findUs">
                <h3 class="antenne__title">Notre adresse</h3>
                <div itemscope itemtype="https://schema.org/PostalAddress">
                    <p class="address__line"><span itemprop="postOfficeBoxNumber"><?php the_field( 'street_number' ); ?></span>, <span itemprop="streetAddress"><?php the_field( 'street_name' ); ?></span></p>
                    <p class="address__line"><span itemprop="postalCode"><?php the_field( 'postal_code' ); ?></span> <span itemprop="addressLocality"><?php the_field( 'city_name' ); ?></span></p>
                    <p class="address__line" itemprop="addressCountry"><?php the_field( 'country' ); ?></p>
                </div>
                <?php if( have_rows('members') ): ?>
                    <?php while ( have_rows('phone_number') ) : the_row(); ?>
                        <p class="findUs__phone"><?php the_sub_field('number'); ?></p>
                <?php endwhile; endif; ?>
                <?php if( have_rows('members') ): ?>
                    <?php while ( have_rows('e-mails') ) : the_row(); ?>
                        <a class="findUs__mail" href="mailto::<?php the_sub_field('mail'); ?>"><?php the_sub_field('mail'); ?></a>
                <?php endwhile; endif; ?>
            </section>
        </section>
    </div>
    <div class="map">
        <a class="map__link" href="<?php the_field( "google_map_link" ); ?>" style="background-image: url( <?php the_post_thumbnail_url(); ?> );"></a>
    </div>

<?php get_footer();
