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
            <span>Menu</span>
        </label>
        <nav>
            <svg class="navblob" width="209" height="488" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M95.984 121.638C95.542 64.438 31.479 16.713-.498 0l.352 463c109.706-50.308 120.213-109.192 129.832-140.924 9.618-31.732-33.15-128.937-33.702-200.438Z"/>
            </svg>
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
            <svg class="navblob2" width="123" height="424" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.446 288.679C5.498 259.857-.4 208.217.02 186c0 0 0-72.5 36.98-126s88-60 88-60v423.182c-2.414 1.801-12.278 1.801-32.425-12.61-25.185-18.014-26.445-85.866-60.13-121.893Z"/>
            </svg>
        </nav>

    </div>

    <a class="logo" href="<?= home_url(); ?>"> </a>
            
    <div class="blobheader"><a href="<?=home_url('/index.php/ansokan');?>">Ansökan</a></div>

</header>