<?php
	$page = "evenements";
	$pageNonIndex="background";
	require("../inclusions/header.inc.php");
	require( '../json/evenementdata.php');
?>

<!-- <img class="imgEvenement" src="../img/evenements/timTalk2017.jpg" alt="Tim Talk - 2017">
<img class="imgEvenement" src="../img/evenements/party2008.jpg" alt="Fête au Tim - 2008">
<img class="imgEvenement" src="../img/evenements/retrouvailles.jpg" alt="Retrouvailles des finissants - 2019">
<img class="imgEvenement" src="../img/evenements/timArcade.jpg" alt="Tim Arcade - 2017"> -->

<div class="mosaique">
	<div class="conteneurMosaique a"></div>
	<div class="conteneurMosaique b">
		<p> <?php echo $timtalk2021["Description"]; ?> </p>
	</div>
	<div class="conteneurMosaique c"></div>
	<div class="conteneurMosaique d">
		<p><?php echo $retrouvaille["Description"]; ?></p>
	</div>
	<div class="conteneurMosaique e"></div>
	<div class="conteneurMosaique f">
		<p> <?php echo $ConcertParty["Description"]; ?> </p>
	</div>
	<div class="conteneurMosaique g">
		<p><?php echo $timarcarde["Description"]; ?></p>
	</div>
	<div class="conteneurMosaique h"></div>
</div>

<?php
	require("../inclusions/footer.inc.php");
?>	