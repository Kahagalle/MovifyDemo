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

                <?php get_template_part('inc/page-title'); ?>

                <?php if ( have_posts() ) : ?>

                    <div class="masonry">
                    <?php while ( have_posts() ): the_post(); ?>
                        <?php get_template_part('content'); ?>
                    <?php endwhile; ?>
                    </div>

                    <?php get_template_part('inc/pagination'); ?>

                <?php endif; ?>

            </div><!--/.content-->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>