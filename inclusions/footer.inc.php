<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
			<?php 
				if($page=="index") :
			?>
				<a class="col-1" href="https://www.facebook.com/maisonneuvetim">
					<img src="img/logoFb.png" alt="logoFacebook">
				</a>
				<a class="col-1" href="https://www.instagram.com/maisonneuvetim/">
					<img src="img/logoInsta.png" alt="logoInstagram">
				</a>
				<a class="col-1" href="https://twitter.com/cdemaisonneuve?lang=fr">
					<img src="img/logoTwi.png" alt="logoTwitter">
				</a>
			<?php 
				else :
			?>
				<a class="col-1" href="https://www.facebook.com/maisonneuvetim">
					<img src="../img/logoFb.png" alt="logoFacebook">
				</a>
				<a class="col-1" href="https://www.instagram.com/maisonneuvetim/">
					<img src="../img/logoInsta.png" alt="logoInstagram">
				</a>
				<a class="col-1" href="https://twitter.com/cdemaisonneuve?lang=fr">
					<img src="../img/logoTwi.png" alt="logoTwitter">
				</a>
			<?php 
				endif;
			?>
			
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

			<?php if($page=="index") : ?> <script src="js/fluidSimulation.js"></script> <?php endif;?>
</body>
</html>
