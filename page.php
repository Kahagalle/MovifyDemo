<?php get_header(); ?>
<div id="img-content" class="nav-page-header" style="background: linear-gradient(0deg,rgba(90, 17, 125, 0.8),rgba(147, 82, 179, 0.75)), url('<?php header_image(); ?>');">
    <div class="container clr nav-page-header-inner">
        <h1 class="nav-page-header-title clr" itemprop="headline">Movies & TV Shows</h1>
        <h4 class="page-subheading">Home | Movie Grid 3</h4>
    </div><!-- .page-header-inner -->
</div>

<div class="container-inner">
    <div class="main">
        <div class="main-inner group">
            <div class="content">

                <?php while ( have_posts() ): the_post(); ?>

                <article <?php post_class(); ?>>

                    <div class="post-wrapper group">
                        <header class="entry-header group">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        <div class="entry-content">
                            <div class="entry themeform">
                                <?php the_content(); ?>
                                <div class="clear"></div>
                            </div><!--/.entry-->
                        </div>
                        <div class="entry-footer group">
                            <?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
                        </div>
                    </div>

                </article><!--/.post-->

                <?php endwhile; ?>

            </div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>