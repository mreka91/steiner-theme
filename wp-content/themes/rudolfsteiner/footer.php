<footer class="footer">
    <h2>Rudolf Steinerskolan i Göteborg</h2>
    <ul>
        <li><img src="<?=get_template_directory_uri();?>/assets/images/location.png" alt="location icon">
            <a href="https://goo.gl/maps/SfCoCBkRCgcJnFsC9">Tallhöjdsgatan 1, <span class="address">416 74 GÖTEBORG</span></a>
        </li>
        <li><img src="<?=get_template_directory_uri();?>/assets/images/phone.png" alt="phone icon"><a href="tel:031-21 46 32">031-21 46 32</a></li>
        <li><img src="<?=get_template_directory_uri();?>/assets/images/mail.png" alt="mail icon"><a href="mailto:rudolf@steinerskolan.se">rudolf@steinerskolan.se</a></li>
    </ul>
    <div class="socialmedia-icons">
        <div class="fb-icon">
            <a href="https://www.facebook.com/rudolfsteinerskolanGBGsforaldraforening/"><img src="<?=get_template_directory_uri();?>/assets/images/facebook.png" /></a>
        </div>
        <div class="instagram-icon">
            <a href="https://www.instagram.com/rudolfsteinerskolangoteborg/"><img src="<?=get_template_directory_uri();?>/assets/images/instagram.png" /></a>
        </div>
    </div>
    <?php wp_nav_menu(
            [
                'theme_location' => __('footer-menu'),
                'menu_class' => __('footer-menu')
            ]
        ); ?>

</footer>
<?php wp_footer(); ?>
</body>

</html>