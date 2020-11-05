
<?php
    $page = "cheminement";
	require("../inclusions/header.inc.php");
?>

<?php 
	$fichier = "../json/Cheminement.json";

	$tousCours = json_decode(file_get_contents($fichier), true);

	$noSession = 0;

	foreach($tousCours as $session){
		$noSession++;
?>
	<div class="cheminementrond">

		<?php foreach($session as $unCours){
			?>
			<button class="rond" data-session="<?= $noSession?>"><p><?= $unCours["NomCours"]?></p></button>
		<?php }?>
		<hr>
	</div>

<?php }?>

<?php
	require("../inclusions/footer.inc.php");
?>	
