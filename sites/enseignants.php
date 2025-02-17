<?php
	$page = "enseignants";
	$pageNonIndex="background";
	require("../inclusions/header.inc.php");
?>

<?php 
		$fichier = "../json/Prof.json";

		$tousProfs = json_decode(file_get_contents($fichier), true);
?>
	<div class="sectionEnseignants">
		<div id="divCreatif">
			<h2 class="categorieProf">Créatifs</h2>
			<?php 
			foreach($tousProfs as $unProf){
				if($unProf["Type"] == "Créatif"):
			?>
					<button class="boutonProf" data-noProf=<?= $unProf["Numero"]?>>
						<p data-noProf=<?= $unProf["Numero"]?>><?= $unProf["Nom"]?></p>
					</button>

			<?php ;
				endif; 
				}
			?>
	<!-- fin div creatif -->
		</div>

		<div id="divLogique">
			<h2 class="categorieProf">Logiques</h2>
			<?php 
				foreach($tousProfs as $unProf){
					if($unProf["Type"] == "Logique"):
				?>
						<button class="boutonProf" data-noProf=<?= $unProf["Numero"]?>>
							<p data-noProf=<?= $unProf["Numero"]?>><?= $unProf["Nom"]?></p>
						</button>
			<?php 
				endif; 
				}
			?>
		</div>
	</div>	
<?php
	require("../inclusions/footer.inc.php");
?>	