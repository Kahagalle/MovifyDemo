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

                <?php if ( is_home() ): ?>
                    <?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
                        <div id="profile" class="pad group">
                            <div id="profile-inner">
                                <?php if ( get_theme_mod('profile-image') ): ?>
                                    <div id="profile-image"><img src="<?php echo get_theme_mod('profile-image'); ?>" alt="" /></div>
                                <?php endif; ?>
                                <?php if ( get_theme_mod('profile-name') ): ?>
                                    <div id="profile-name"><?php echo get_theme_mod('profile-name'); ?></div>
                                <?php endif; ?>
                                <?php if ( get_theme_mod('profile-description') ): ?>
                                    <div id="profile-description"><?php echo get_theme_mod('profile-description'); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
                    <?php get_template_part('inc/page-title'); ?>
                <?php endif; ?>

                <?php get_template_part('inc/front-widgets-top'); ?>

                <?php if ( have_posts() ) : ?>

                    <div class="masonry">
                    <?php while ( have_posts() ): the_post(); ?>
                        <?php get_template_part('content'); ?>
                    <?php endwhile; ?>
                    </div>

                    <?php get_template_part('inc/front-widgets-bottom'); ?>
                    <?php get_template_part('inc/pagination'); ?>

                <?php endif; ?>

            </div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>