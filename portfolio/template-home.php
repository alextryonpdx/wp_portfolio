<?php /* Template Name: HOME */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<main role="main" >

			<div class="row">
				<h1>Alex Tryon</h1>
				<h2 style="margin-top:0;">Web Developer</h2>
				<?php the_content(); ?>
			</div>

<?php endwhile; endif; ?>
		<!-- <img id="headshot" src="<?php the_field('photo'); ?>"> -->
		<div class="clearfix"></div>	
	</main>
<?php //get_template_part('works'); ?>


<?php get_footer(); ?>
