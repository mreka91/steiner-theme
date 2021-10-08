<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


<header>

    <div class="navigation">
        <input type='checkbox' id='toggle' style='display:none;' />
        <label class='toggle-btn toggle-btn__cross' for='toggle'>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <span>Meny</span>
        </label>
        <nav>
        <img src="<?=get_template_directory_uri();?>/assets/images/Blobb2mobil.svg" class="navblob"/>

            <?php wp_nav_menu(
                [
                    'theme_location' => __('top-menu'),
                    'menu_class' => __('top-bar')
                ]
            ); ?>
            <div class="nav-socials">
                <a href="https://www.facebook.com/rudolfsteinerskolanGBGsforaldraforening/"><img src="<?=get_template_directory_uri();?>/assets/images/facebook.png" /> </a>
                <a href="https://www.instagram.com/rudolfsteinerskolangoteborg/"><img src="<?=get_template_directory_uri();?>/assets/images/instagram.png" /> </a>
            </div>
            <img src="<?=get_template_directory_uri();?>/assets/images/Blobb1mobil.svg" class="navblob2"/>
        </nav>

    </div>

    <a class="logo" href="<?= home_url(); ?>"> </a>
            
    <div class="blobheader"><a href="<?=home_url('/index.php/ansokan');?>">Ansök</a></div>

</header>