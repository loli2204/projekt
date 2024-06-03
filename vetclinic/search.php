<?php
/*
Template Name: Sök
*/
?>
<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php printf(__('Search Results for: %s', 'textdomain'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </header><!-- .page-header -->

        <?php if (have_posts()) : ?>

            <?php
            // Loop för att hämta och visa inlägg
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'search');
            endwhile;

            // Paginering
            the_posts_pagination(array(
                'prev_text' => __('Previous', 'textdomain'),
                'next_text' => __('Next', 'textdomain'),
            ));

        else :
            // Om inga inlägg finns
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
