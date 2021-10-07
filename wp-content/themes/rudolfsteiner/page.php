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

        <svg class="blob3" width="349" height="1317" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M90.589 896.674C15.35 807.149-1.115 646.75.057 577.741c0 0 0-225.195 103.247-391.373S349 0 349 0v1314.46c-6.739 5.59-34.279 5.59-90.532-39.17-70.316-55.95-73.832-266.71-167.88-378.616Z"/>

        </svg>


        <svg class="blob4" width="495" height="1131" fill="none" xmlns="http://www.w3.org/2000/svg">
 
            <path d="M236.923 265.31C235.879 130.202 75.528 39.475 0 0v1070.5c259.126-118.828 293.808-256.806 316.526-331.757 22.719-74.951-78.299-304.549-79.603-473.433Z"/>

        </svg>


        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>