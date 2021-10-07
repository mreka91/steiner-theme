<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    <img  class="form1" src="<?=get_template_directory_uri();?>/assets/images/Blobb1.svg" class="form1-mobile"/>

    <img src="<?=get_template_directory_uri();?>/assets/images/Blobb1mobil.svg" class="form1-mobile"/>


    <img  class="form2" src="<?=get_template_directory_uri();?>/assets/images/Blobb2.svg" class="form1-mobile"/>

    <img src="<?=get_template_directory_uri();?>/assets/images/Blobb2mobil.svg" class="form2-mobile"/>


    <img  class="form3" src="<?=get_template_directory_uri();?>/assets/images/Blobb3.svg" class="form1-mobile"/>

    <img src="<?=get_template_directory_uri();?>/assets/images/Blobb1mobil.svg" class="form3-mobile"/>


    <img  class="form4" src="<?=get_template_directory_uri();?>/assets/images/Blobb4.svg" class="form1-mobile"/>

    <img src="<?=get_template_directory_uri();?>/assets/images/Blobb2mobil.svg" class="form4-mobile"/>

    <img src="<?=get_template_directory_uri();?>/assets/images/Blobb1mobil.svg" class="form5-mobile"/>
    <img src="<?=get_template_directory_uri();?>/assets/images/Blobb2mobil.svg" class="form6-mobile"/>

        <?php wp_nav_menu(
            [
                'theme_location' => __('klass'),
                'menu_class' => __('klass-navigation')
            ]
        ); ?>

        <?php the_content(); ?>



    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>