<?php
get_header();
?>
    <header class="header">
        <div class="header__filter">
            <div class="header__titleBloc clear">
                <a class="header__logoLink" href="/index.html"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="Lien vers l'accueil" /></a>
                <h1 class="header__title">Erreur 404<p class="header__subTitle">La page à laquelle vous voulez accéder n'existe pas ou est en cours de creation.</p></h1>
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
    <header class="header">
        <div class="header__titles">
            <h1 class="header__title">Erreur 404 - Page Not Found</h1>
        </div>
        <nav class="mainNav">
            <h2 class="hidden">Navigation principale du site</h2>
            <?php foreach ( pf_get_menu_items( 'main-nav' ) as $navItem ): ?>
                <a href="<?php echo $navItem -> url; ?>" class="mainNav__elt<?php echo $navItem -> isCurrent ? ' mainNav__elt--active' : ''; ?>"><?php echo $navItem -> label ?></a>
            <?php endforeach; ?>
        </nav>
    </header>
    <main class="wrap">
<?php
get_footer();
?>
