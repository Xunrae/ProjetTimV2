<div class="essais">
<div class="progress">
<?php
    $page = "cheminement";
	require("../inclusions/header.inc.php");
?>
<svg id="triangle">
<!--<rect x="50" y="20" rx="20" ry="20" width="150" height="150"
  id="triangle" style="fill:transparent;stroke:black;stroke-width:5;opacity:0.5" />-->
  <polygon points="40,20, 700,10, 660,30 0,40"
  id="triangle" />
</svg>
<?php 
	$fichier = "../json/Cheminement.json";

	$tousCours = json_decode(file_get_contents($fichier), true);


	$noSession = 0;

	foreach($tousCours as $session){
		$noSession++;
?>

	<div class="cheminementrond">
		<h3><?="Session ".$noSession?></h3>

		<?php foreach($session as $unCours){
			?>
			<button class="rond" data-session="<?= $noSession?>">
				<p data-session="<?= $noSession?>"><?= $unCours["NomCours"]?></p>
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
