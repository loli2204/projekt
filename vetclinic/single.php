<?php
/*
Template Name: Enkel med inlägg
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Loop för att hämta och visa inläggsinnehåll
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php
                    // Visa inläggsmeta
                    if ('post' === get_post_type()) :
                        ?>
                        <div class="entry-meta">
                            <?php
                            // Datum
                            echo '<span class="posted-on">' . get_the_date() . '</span>';

                            // Kategori
                            $categories_list = get_the_category_list(', ');
                            if ($categories_list) :
                                echo '<span class="cat-links">' . $categories_list . '</span>';
                            endif;

                            // Taggar
                            $tags_list = get_the_tag_list('', ', ');
                            if ($tags_list) :
                                echo '<span class="tags-links">' . $tags_list . '</span>';
                            endif;
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
