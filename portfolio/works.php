
<div class="row" id="works">
<?php
	$work = query_posts(array('post_type' => 'project'));
	if( $work ) :
		foreach( $work as $post ) : 
		setup_postdata( $post ); 
		$name = get_field('name');
		$preview = get_field('preview');
		$preview_color = get_field('preview_color');
		$link = get_the_permalink($post->ID);
?>


			<a href="<?php echo $link; ?>">
				<div class="project-preview" style="background-image:url('<?php echo $preview; ?>');">
					<div style="background-color:<?php echo $preview_color; ?>;" class="preview-overlay">
						<h1>
							<?php echo $name; ?>
						</h1>
					</div>
				</div>
			</a>



<?php
		endforeach;
	endif;
?>
	<div class="clearfix"></div>	
</div>
<div class="clearfix"></div>	