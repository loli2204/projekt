<?php
/*
Template Name: Vanlig undersida
*/
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div class="main-content">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                            ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                </div><!-- .col-md-8 -->

            </div><!-- .row -->
        </div><!-- .container -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
