<?php
	$page = "index";
	require("inclusions/header.inc.php");
?>


<style>
    canvas {
    width: 100vw;
    height: 100vh;
    position:fixed;
    z-index: -100;
	}
</style>
	

<canvas></canvas>

<div class="accueilMain">
			<img class="logotim" src="img/Logo3D.png" alt="Logo du TIM">

			<!-- Mettre en json ici!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<h1 class="titreTimAccueil">Technique d'Intégration Multimédia<br>au Collège de Maisonneuve</h1>
		</div>


<?php
	require("inclusions/footer.inc.php");
?>	