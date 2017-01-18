<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width,initial-scale1">
    <meta name="author" content="Mucht - Mathieu Claessens">
    <meta name="description" content="<?php the_field( 'meta_description' ); ?>">
    <meta name="keywords" content="<?php the_field( 'meta_keywords' ); ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/styles.css'; ?>" media="screen" title="no title">

    <?php wp_head(); ?>

    <title><?php the_title();?> - <?php bloginfo( 'name' ); ?></title>
</head>
<body>
