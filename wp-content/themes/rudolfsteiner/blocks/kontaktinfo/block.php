<div class="kontakt-container">
    <h1><?php block_field("kontakt-title"); ?></h1>
    <h2><?php block_field("kontakt-name"); ?></h2>
    <ul>
        <li><img src="<?php block_field("location-image"); ?>" alt="location icon">
            <a href="https://goo.gl/maps/SfCoCBkRCgcJnFsC9"><?php block_field("location-text"); ?></a>
        </li>
        <li><img src="<?php block_field("tel-image"); ?>" alt="phone icon"><a href="tel:031-21 46 32"><?php block_field("tel-info"); ?></a></li>
        <li><img src="<?php block_field("email-image"); ?>" alt="mail icon"><a href="mailto:rudolf@steinerskolan.se"><?php block_field("email-info"); ?></a></li>
    </ul>
    <div class="socialmedia">
        <div class="facebook">
            <a href="https://www.facebook.com/rudolfsteinerskolanGBGsforaldraforening/"><img src="<?php block_field("facebook"); ?>" /></a>
        </div>
        <div class="instagram">
            <a href="https://www.instagram.com/rudolfsteinerskolangoteborg/"><img src="<?php block_field("instagram"); ?>" /></a>
        </div>
    </div>

    </div>