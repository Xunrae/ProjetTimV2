		<footer id="colophon" class="site-footer <?php if($page == "index"){echo "accueilFooter";}?>">
			<div class="site-info">
				<div class="container">
					<?php 
						if($page=="index") :
					?>
						<a class="col-1" href="https://www.facebook.com/maisonneuvetim" target="blank">
							<img src="img/logoFb.png" alt="logoFacebook">
						</a>
						<a class="col-1" href="https://www.instagram.com/maisonneuvetim/" target="blank">
							<img src="img/logoInsta.png" alt="logoInstagram">
						</a>
						<a class="col-1" href="https://twitter.com/cdemaisonneuve?lang=fr" target="blank">
							<img src="img/logoTwi.png" alt="logoTwitter">
						</a>
					<?php 
						else :
					?>
						<a class="col-1" href="https://www.facebook.com/maisonneuvetim" target="blank">
							<img src="../img/logoFb.png" alt="logoFacebook">
						</a>
						<a class="col-1" href="https://www.instagram.com/maisonneuvetim/" target="blank">
							<img src="../img/logoInsta.png" alt="logoInstagram">
						</a>
						<a class="col-1" href="https://twitter.com/cdemaisonneuve?lang=fr" target="blank">
							<img src="../img/logoTwi.png" alt="logoTwitter">
						</a>
					<?php 
						endif;
					?>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php if($page=="index") : ?> 
		<script src="js/fluidSimulation.js"></script>
	<?php elseif($page=="cheminement") : ?>
		<script src="../js/interactionPastilles.js"></script>
		<script src="../js/background.js"></script>
	<?php elseif($page=="projets") : ?>
		<script src="../js/interactionProjets.js"></script>
		<script src="../js/background.js"></script>
	<?php elseif($page=="enseignants") : ?>
		<script src="../js/interactionProfs.js"></script>
		<script src="../js/background.js"></script>
	<?php endif;?>
</body>
</html>