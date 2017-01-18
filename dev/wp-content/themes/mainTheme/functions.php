<?php

/*
 *
 * Defines custom poste_types
 *
*/
register_post_type( 'profiles', [
    'label' => 'Profiles',
    'labels' => [
            'singular_name' => 'Profile',
            'add_new' => 'Ajouter un nouveau profile'
        ],
    'description' => 'La liste de tous les profiles des visiteurs du site.',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-groups',
    'supports' => [ 'title', 'editor', 'thumbnail' ],
    'has_archive' => true
    ] );

register_post_type( 'Antennes', [
    'label' => 'Antennes',
    'labels' => [
            'singular_name' => 'Antenne',
            'add_new' => 'Ajouter un nouveau antenne'
        ],
    'description' => 'La liste de tous les profiles des visiteurs du site.',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-sticky',
    'supports' => [ 'title', 'editor', "thumbnail" ],
    'has_archive' => true
    ] );

register_post_type( 'Partners', [
    'label' => 'Partners',
    'labels' => [
            'singular_name' => 'Partner',
            'add_new' => 'Ajouter un nouveau partenaire'
        ],
    'description' => 'La liste de tous les partenaires de notre ASBL.',
    'public' => true,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-universal-access',
    'supports' => [ 'title' ],
    'has_archive' => true
    ] );

/*
 * Récupérer l'URL des thumbnails
 *
*/
 add_theme_support( 'post-thumbnails' );

 /*
  * remove balise P to the facebook post.
  *
 */
remove_filter('rfbp_content', 'wpautop');


/*
 *
 * générate navigaiton
 *
*/

register_nav_menu( 'main-nav', 'Menu principal' );
// register_nav_menu( 'map-nav', 'Menu du plan du site' );

/*
 *
 * générate a custom menu array
 *
*/
function ep_get_menu_id( $location ){
  $locations = get_nav_menu_locations();
  if ( isset( $locations[ $location ] ) ) {
      return $locations[ $location ];
  }
  return false;
}

function ep_is_current( $obj ) {
  global $post;
  return ( $obj -> object_id == $post -> ID );
}

function ep_get_menu_items( $location ) {

  $navItems = [];
  foreach ( wp_get_nav_menu_items( ep_get_menu_id( $location ) ) as $obj) {
      $item = new stdClass();
      $item -> isCurrent = ep_is_current( $obj );
      $item -> url = $obj -> url;
      $item -> label = $obj -> title;
      $item -> icon = $obj -> classes[0];
      array_push( $navItems, $item );
  }
  return $navItems;
}

/*
 *
 * générate an id from section title
 *
*/
function ep_get_id_from_title( $title ){

    $titleUpperCase = ucwords( $title );
    $titleNoSpace = str_replace(" ", "", $titleUpperCase);
    $titleID = lcfirst($titleNoSpace);

    return $titleID;
}
