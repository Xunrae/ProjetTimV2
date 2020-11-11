<?php
    $page = "enseignants";
	require("../inclusions/header.inc.php");
?>

<?php 
		$fichier = "../json/Prof.json";

		$tousProfs = json_decode(file_get_contents($fichier), true);
?>

	<div id="divCreatif">
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
<?php
	require("../inclusions/footer.inc.php");
?>	