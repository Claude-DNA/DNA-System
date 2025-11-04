<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav>
        <ul>
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url('/getting-started'); ?>">Getting Started</a></li>
            <li><a href="<?php echo home_url('/protocols'); ?>">Protocols</a></li>
            <li><a href="<?php echo home_url('/examples'); ?>">Examples</a></li>
            <li><a href="<?php echo home_url('/downloads'); ?>">Downloads</a></li>
            <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
        </ul>
    </nav>

    <main>
