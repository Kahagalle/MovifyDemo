<?php get_header(); ?>

    <div class="nav-single-page-header" style="background: linear-gradient(0deg,rgba(90, 17, 125, 0.8),rgba(147, 82, 179, 0.75)), url('<?php echo the_field('backdrop'); ?>'); background-size: cover;">
    <div class="container clr nav-page-header-inner">
        <div class="single-title-div">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <p class="summary"> &nbsp; <?php echo the_field('summary'); ?></p>
            <h1 class="trailer"><a href="#trailer">TRAILER</a></h1>
            <i class="fa fa-star" style="color:gold"></i><i class="fa fa-star" style="color:gold"></i><i class="fa fa-star" style="color:gold"></i><i class="fa fa-star" style="color:gold"></i><i class="fa fa-star-o" style="color:gold"></i> <p style="color: #fff; display: inline-block;"> &nbsp; <?php echo the_field('rate'); ?></p>
        </div>
    </div><!-- .page-header-inner -->
</div>
<div class="container-inner">
    <div class="main">
        <div class="main-inner group">
            <div class="content">

                <?php while ( have_posts() ): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div style="width: 100%;">
                            <img class="poster-img" src="<?php echo the_field('poster'); ?>">
                        </div>

                        <div style="width: 100%; display: inline-block; padding-top: 70px;">
                            <div class="storyline-left-div">
                                <div class="storyline">
                                    <p>Storyline</p>
                                </div>

                                <div class="storyline-dis">
                                    <?php the_content(); ?>
                                </div>

                                <div class="storyline">
                                    <p id="trailer">Trailer</p>
                                </div>
                                <div class="entry-media">
                                    <?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
                                </div>

                            </div>
                            <div class="storyline-right-div">
                                <div class="storyline-data">
                                    <p class="storyline">Details</p>
                                    <p class="storyline-data-dis" style="font-weight: 400;">Release date:</p><p class="storyline-data-dis"> &nbsp; <?php get_detail_info(0); ?></p><br>
                                    <p class="storyline-data-dis" style="font-weight: 400;">Director:</p><p class="storyline-data-dis"> &nbsp; <?php get_detail_info(1); ?></p><br>
                                    <p class="storyline-data-dis" style="font-weight: 400;">Imdb Rating:</p><p class="storyline-data-dis"> &nbsp; <?php get_detail_info(2); ?></p><br>
                                    <p class="storyline-data-dis" style="font-weight: 400;">Country:</p><p class="storyline-data-dis"> &nbsp; <?php get_detail_info(3); ?></p><br>
                                    <p class="storyline-data-dis" style="font-weight: 400;">Language:</p><p class="storyline-data-dis"> &nbsp; <?php get_detail_info(4); ?></p><br>
                                    <p class="storyline-data-dis" style="font-weight: 400;">Production Co:</p><p class="storyline-data-dis"> &nbsp; <?php get_detail_info(5); ?></p><br>
                                </div>
                                <div class="storyline-data">
                                    <p class="storyline">Cast</p>
                                    <p class="storyline-data-dis"><?php get_cast(0); ?></p><br>
                                    <p class="storyline-data-dis"><?php get_cast(1); ?></p><br>
                                    <p class="storyline-data-dis"><?php get_cast(2); ?></p><br>
                                    <p class="storyline-data-dis"><?php get_cast(3); ?></p><br>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry themeform">
                                    <?php /*the_content(); */?>
                                    <?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','gridzone'),'after'=>'</div>')); ?>
                                    <div class="clear"></div>
                                </div><!--/.entry-->
                            </div>
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