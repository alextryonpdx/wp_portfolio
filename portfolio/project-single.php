<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<main role="main">

		<div class="info">
			<a href="<?php the_field('link'); ?>" target="_blank">
				<h1><?php the_field('name'); ?></h1>
			</a>

			<p><?php the_field('description'); ?></p>

			<div class="previews">
				<?php 
				if( get_field('desktop_preview') ):
					echo '<img src=' . the_field('desktop_preview') .'/>';
				endif;
				?>

				<?php 
				if( get_field('tablet_preview') ):
					echo '<img src=' . the_field('tablet_preview') .'/>';
				endif;
				?>

				<?php 
				if( get_field('mobile_preview') ):
					echo '<img src=' . the_field('mobile_preview') .'/>';
				endif;
				?>
			</div>
		</div>

		<div class="preview">
			<?php 
			if( get_field('first_slide') ):
				echo '<img class="first-slide" src=' . the_field('first_slide') .'/>';
			endif;
			?>
			<?php 
			if( get_field('gif') ):
				echo '<img class="gif" src=' . the_field('gif') .'/>';
			endif;
			?>
		</div>

	</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
