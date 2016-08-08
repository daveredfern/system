	<div class="u-container u-container--lg u-section">
		<hr />
	</div>

	<div class="g-four-up g-limit g-gutter-x-lg">
		<div>
			<p><strong>Send an email</strong><br />
				<a href="mailto:dave@daveredfern.com">dave@daveredfern.com</a></p>
		</div>
		<div>
			<p><strong>Follow me online</strong><br />
				<a href="https://www.twitter.com/daveredfern">Twitter</a><br />
				<a href="https://uk.linkedin.com/in/daveredfern">LinkedIn</a></p>
		</div>
		<div>
			<p><strong>Open source</strong><br />
				<a href="https://github.com/daveredfern">Github</a></p>
		</div>
		<div>
			<p><strong>Photography</strong><br />
				<a href="/photography/">Gallery</a><br />
				<a href="https://www.instagram.com/daveredfern/">Instagram</a></p>
		</div>
	</div>

	<?php wp_footer(); ?>

	<script async src='<?php echo get_template_directory_uri(); ?>/build/js/analytics.js'></script>
	<script> window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date; ga('create', 'UA-727955-12', 'auto'); ga('send', 'pageview'); </script>
	<?php if(is_post_type_archive('photography')) : ?>
		<script async src='<?php echo get_template_directory_uri(); ?>/build/js/lazyload.js'></script>
	<?php endif; ?>

</body>
</html>
