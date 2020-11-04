<?php
    $page = "cheminement";
	require("../inclusions/header.inc.php");
?>

<?php 
	$fichier = "../json/Cheminement.json";

	$tousCours = json_decode(file_get_contents($fichier), true);

	foreach($tousCours as $session){
?>
	<div class="cheminementrond">

		<?php foreach($session as $unCours){?>
			<button class="rond"><?= $unCours["NomCours"]?></button>
		<?php }?>
		<hr>
	</div>

<?php }?>

<?php
	require("../inclusions/footer.inc.php");
?>	