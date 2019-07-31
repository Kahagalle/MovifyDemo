<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('masonry-item group'); ?>>
	<div class="masonry-inner">

		<div class="entry-top">
			<div class="entry-thumbnail" href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('gridzone-medium-h'); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
				<?php endif; ?>
				<?php if ( has_post_format('video') && !is_sticky() ) ?> <a href="<?php the_permalink(); ?>"><span class="thumb-icon"><i class="fa fa-play"></i></span></a>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
			</div>

		</div>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2><!--/.entry-title-->
        <ul class="entry-meta group">
            <li class="entry-date"><i class="fa fa-star" style="color:gold"></i><?php echo the_field('rate'); ?></li>
            <li class="entry-comments" style="float: right;"><span class="entry-comments"><?php echo the_field('genres'); ?></span></li>
        </ul>

		<?php if (get_theme_mod('excerpt-length','0') != '0'): ?>
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
            <div class="btndiv">
                <a class="btn" href="<?php the_permalink(); ?>"><strong>DETAILS</strong></a>
            </div>
		<?php endif; ?>



	</div>
</article><!--/.post-->