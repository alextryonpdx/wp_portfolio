<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<main role="main" class="row">

		<a href="<?php the_field('link'); ?>" target="_blank">
			<h1><?php the_field('name'); ?></h1>
		</a>

		<!-- <div class="info">

			<p><?php the_field('description'); ?></p>

		 	<div class="previews row">
				
			</div>

		</div> -->

		<div class="preview-gif">
			<?php 
			if( get_field('gif') ):
				echo '<img class="gif" src="' . get_field('gif') .'"/>';
			endif;
			?>
		</div>

		<div class="previews row">
			<?php 
			if( get_field('desktop_preview') ):
				echo '<img class="desktop" src="' . get_field('desktop_preview') . '"/>';
			endif;
			?>
			<?php 
			if( get_field('tablet_preview') ):
				echo '<img class="tablet" src="' . get_field('tablet_preview') .'"/>';
			endif;
			?>
			<?php 
			if( get_field('mobile_preview') ):
				echo '<img class="mobile" src="' . get_field('mobile_preview') .'"/>';
			endif;
			?>	
			<div class="clearfix"></div>
		</div>

		
		<div class="clearfix"></div>
	</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
