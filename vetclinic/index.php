<?php
/*
Template Name: Hem
*/

get_header(); ?>

<!-- Banner -->
<div class="banner">
    <div class="banner-content">
        <h2>VI TAR HAND OM  <br> DITT DJUR</h2>
        <p>Personlig djursjukvård i mindre skala, <br> med tandvård som spetskompetens</p>
        <a href="kontaktsidan-url" class="banner-btn">KONTAKTA OSS</a>
    </div>
    <img src="<?= header_image(); ?>" height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>">
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="box-container">

            <!-- Loop för att hämta innehåll från posttyperna "custom_info_box_1" och "custom_info_box_2" -->
            <?php
            $args = array(
                'post_type' => array('custom_info_box_1', 'custom_info_box_2'),
                'posts_per_page' => 2 // Hämta endast två poster
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $box_class = (get_post_type() == 'custom_info_box_1') ? 'gray-box' : 'blue-box';
                    $featured_image_url = (get_post_type() == 'custom_info_box_1') ? get_template_directory_uri() . '/images/V.png' : get_template_directory_uri() . '/images/K.png'; 
            ?>
                    <div class="box <?php echo $box_class; ?>">
                        <img src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                        <div class="box-content">
                            <h2><?php the_title(); ?></h2>
                            <div class="icon" ><i class="fas fa-chevron-down"></i></div>
                            <div class="box-description">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div><!-- .box-container -->
        <div class="staff">
            <h2>PERSONAL</h2>
            <?php echo do_shortcode('[tmm name="personal"]'); ?>
</div>

        <div class="reviews">
            <h2>KUNDRECENSIONER</h2>
            <p>Det är viktigt för oss att du och ditt djur <br> ska känna er trygga med oss.</p>
            <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
</div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
<script>
    function showDescription(element) {
        // Visa boxbeskrivningen när musen sveps över
        element.querySelector('.box-description').style.display = 'block';
    }

    function hideDescription(element) {
        // Dölj boxbeskrivningen när musen lämnar boxen
        element.querySelector('.box-description').style.display = 'none';
    }
</script>