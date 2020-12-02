		<?php
			$page = "cheminement";
			$pageNonIndex="background";
			require("../inclusions/header.inc.php");
		?>
		<?php 
			$fichier = "../json/Cheminement.json";
			$tousCours = json_decode(file_get_contents($fichier), true);
			$noSession = 0;

			foreach($tousCours as $session) {
				$noSession++;
		?>

			<div class="cheminementrond">
				<h3 class="noSession"><?="Session ".$noSession?></h3>
			
				<?php 
					foreach($session as $unCours){
				?>
					<!-- data-session = le numero de la session, data-code = le code du cours -->
					<button class="rond" data-session="<?= $noSession?>" data-code="<?= substr($unCours["NomCours"],0,7)?>">
						<p data-session="<?= $noSession?>" data-code="<?= substr($unCours["NomCours"],0,7)?>">
							<?= substr($unCours["NomCours"],11)?>
						</p>
					</button>
				<?php }?>
				<hr>
			</div>
				
		<?php }?>
		<?php
			require("../inclusions/footer.inc.php");
		?>	
	</div>
</div>
