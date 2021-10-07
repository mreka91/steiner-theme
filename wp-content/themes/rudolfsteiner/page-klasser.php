<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->

        <svg class="blob" width="82" height="266" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path d="M46.857 53.418C42.93 20.148 14.837 4.001 0 0v266c79.226-9.085 82-82.365 82-102.112 0-50.965-26.902-40.666-35.143-110.47Z" fill="url(#a)" />
            <defs>
                <linearGradient id="a" x1="41" y1="0" x2="41" y2="266" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FDECDD" />
                    <stop offset="1" stop-color="#FFE8E1" />
                </linearGradient>
            </defs>
        </svg>

        <svg class="blob1" width="524" height="988" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path d="M136.013 426.246C23.048 306.598-1.674 92.229.086 0H524v984.604c-10.118 7.478-51.468 7.478-135.927-52.346-105.575-74.78-110.854-356.452-252.06-506.012Z" />

        </svg>

        <svg class="blob2" width="487" height="1160" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path d="M221.769 288.074C220.725 152.966 69.409 40.239-6.12.764l-7.573 24.984-298.461 984.652 288.472 87.44c259.126-118.827 302.336-261.381 325.055-336.333 22.718-74.951-78.299-304.549-79.604-473.433Z" />

        </svg>


        <svg class="blob3" width="411" height="1370" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path d="M222.294 323.975C290.009-45.188 465.99 53.625 573.539 12l6.182 136.892L823.389 1248.3l-164.444-69.65L494.5 1109c-134.683 205.88-338.452-279.313-357-363-18.548-83.687 57-270.5 84.794-422.025Z" />
        </svg>

        <svg class="blob4" width="616" height="1214" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path d="M174.988 751.39c75.13 180.636-1.702 383.61-49.509 462.52L-498 858.101-9.983 2.95c15.747.376 64.955 28.458 135.814 137.776 88.573 136.647-44.754 384.871 49.157 610.664Z" />

        </svg>

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