		</div>
		<!-- /wrapper -->

		<?php 

		$email = get_field('email', 25);
		$phone = get_field('phone', 25);
		$phone_simple = get_field('phone_simple', 25);

		?>

		<!-- footer -->
		<footer class="footer" role="contentinfo">

<!-- 			<p class=>Alex Tryon</p>
 -->			<a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
			<a href="tel:<?php echo $phone_simple ?>"><?php echo $phone ?></a>

		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-92885521-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
