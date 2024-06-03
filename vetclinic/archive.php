<?php
/*
Template Name: Arkiv
*/
?>
<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    if (is_archive()) {
                        single_cat_title();
                    } elseif (is_search()) {
                        echo 'Search results for: ' . get_search_query();
                    } else {
                        echo 'Archives';
                    }
                    ?>
                </h1>
            </header><!-- .page-header -->

            <?php
            // Loop för att hämta och visa inlägg
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_type());
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
