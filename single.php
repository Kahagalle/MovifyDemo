<?php get_header(); ?>
    <div class="nav-page-header" style="background: linear-gradient(0deg,rgba(90, 17, 125, 0.8),rgba(147, 82, 179, 0.75)), url('/img/movie-detail-bg.jpg');">
    <div class="container clr nav-page-header-inner">

        <header class="entry-header group">
            <h1 class="entry-title" style="color: #fff"><?php the_title(); ?></h1>
        </header>
    </div><!-- .page-header-inner -->
</div>
<div class="container-inner">
    <div class="main">
        <div class="main-inner group">
            <div class="content">

                <?php while ( have_posts() ): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="entry-media">
                            <?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
                        </div>

                        <div class="entry-content">
                            <div class="entry themeform">
                                <?php the_content(); ?>
                                <?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','gridzone'),'after'=>'</div>')); ?>
                                <div class="clear"></div>
                            </div><!--/.entry-->
                        </div>
                        <div class="entry-footer group">

                            <?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','gridzone').'</span> ','','</p>'); ?>

                            <div class="clear"></div>

                        </div>
                    </article><!--/.post-->


                <?php endwhile; ?>

            </div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>