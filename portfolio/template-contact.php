<?php /* Template Name: CONTACT */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<main role="main" >

		<div class="left">
			<div class="row">
				<h1>Contact Me!</h1>
				<?php the_content(); ?>
			</div>

			<div class="row links">
				<a class="contact-link" href="mailto:<?php the_field('email'); ?>">
					<img alt="send me an email" src="<?php echo get_template_directory_uri(); ?>/img/icons/email.png"><?php the_field('email'); ?>
				</a>
				<a class="contact-link" href="tel:<?php the_field('phone'); ?>">
					<img alt="give me a call" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"><?php the_field('phone'); ?>
				</a>
			</div>
		</div>

		<div class="row right" id="form">
			<?php echo do_shortcode('[contact-form-7 id="29" title="Contact"]'); ?>
		</div>
		


		<!-- <img id="headshot" src="<?php the_field('photo'); ?>"> -->
		<div class="clearfix"></div>
	</main>
<?php endwhile; endif; ?>

<?php //get_template_part('works'); ?>

<?php get_footer(); ?>
