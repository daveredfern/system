
	<?php if(!is_page_template('page-newsletter.php')) : ?>
		<div class="u-container u-section">
			<h2>Notes to your inbox</h2>	
			<p>Be notified when I post something new. Occasional, short emails. Nothing fancy, just links to new articles and content.</p>
			<form action="https://tinyletter.com/daveredfern" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/daveredfern', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
				<label for="tlemail">Enter your email address</label>
				<input type="hidden" value="1" name="embed"/>
				<div class="flag">
					<input type="text" name="email" id="tlemail" />
					<button class="btn"type="submit" value="Subscribe">Subscribe</button>
				</div>
			</form>
			<p class="micro">I respect your inbox. No spam. Unsubscribe with just a click.</p>
		</div>
	<?php endif; ?>


	<div class="u-container u-container--lg u-section">
		<hr />
	</div>

	<div class="grid g-four-up g-limit g-gutter-x">
		<div>
			<p><strong>What I'm doing</strong><br />
				 My <a href="<?php echo get_permalink(285); ?>">now page</a> shows what I'm focusing my efforts on.</p>
		</div>
		<div>
			<p><strong>Send me an email</strong><br />
				<a href="mailto:dave@daveredfern.com">dave@daveredfern.com</a></p>
		</div>
		<div>
			<p><strong>Follow me online</strong><br />
				<a href="https://www.twitter.com/daveredfern">Twitter</a><br />
				<a href="https://uk.linkedin.com/in/daveredfern">LinkedIn</a><br />
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
