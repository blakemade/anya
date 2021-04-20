

/** 
* <?php wp_head(); ?> 
*/

<?php get_header() ?>

    <h1>
        This is an h1.
    </h1>
    <h3>
        <?php
        $site_title = get_bloginfo('name');
        $site_url = network_site_url('/');
        $site_description = get_bloginfo('description');
        echo 'The Network Home URL is: ' . $site_url;
        echo "<br>";
        echo 'The Network Home Name is: ' . $site_title;
        echo "<br>";
        echo 'The Network Home Tagline is: ' . $site_description;
        ?>
    </h3>

    <?php get_footer(); ?>