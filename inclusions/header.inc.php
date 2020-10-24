<?php
    $headInfo = [
        "index"         =>  [
			"title" =>  "TIM - Accueil",
			"description" => "Accueil du site du TIM"
        ],
        "cheminement"   =>  [
            "title" =>  "TIM - Cheminement",
			"description" => "Cheminement scolaire au TIM",
			"h2page" => "Cheminement"
		],
		"enseignants"   =>  [
            "title" =>  "TIM - Enseignants",
			"description" => "Description des enseignants du TIM",
			"h2page" => "Enseignants"
		],
		"projets"   =>  [
            "title" =>  "TIM - Projets",
			"description" => "Projets des anciens étudiants du TIM",
			"h2page" => "Projets"
		],
		"evenements"   =>  [
            "title" =>  "TIM - Évènements",
			"description" => "Évènements au TIM",
			"h2page" => "Évènements"
		]
    ];
?>
<!doctype html>
<html lang="fr-CA">
<head>

	<title><?= $headInfo[$page]["title"]?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="UTF-8"/>

	<meta name="author" content="Antoine Côté-L'Écuyer, Dalianne Gosselin, David Céré, Raphaël Jeudy, Sandrine Cryans"/>
	<meta name="description" content ="<?= $headInfo[$page]["description"] ?>"/>

	<!-- Si on est sur la page d'accueil les css sont -->
<?php if($page=="index") : ?>
	<link href="css/normalize.css"
			type="text/css"
			rel="stylesheet">

	<link href="css/style.css"
			type="text/css"
			rel="stylesheet">
	<!-- Pour toutes les autres pages les css sont -->
<?php else : ?>
	
	<link href="../css/normalize.css"
			type="text/css"
			rel="stylesheet">

	<link href="../css/style.css"
			type="text/css"
			rel="stylesheet">

<?php endif; ?>

</head>

<body>

<div id="page" class="site">

	<header class="site-header">
		<div class="site-branding">
			<?php

				//si on est sur la page d'accueil
				if ($page=="index") :
			?>

				<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Changer les textes en json ici !!!!!!!!!!!!!!!!!!!!!!!!-->
				<div class='container'>
					<a href="sites/cheminement.php"><div class="ongletAnimAccueil cube col-2">Cheminement</div></a>
					<a href="sites/enseignants.php"><div class="ongletAnimAccueil cube col-2">Enseignants</div></a>
					<a href="sites/evenements.php"><div class="ongletAnimAccueil cube col-2">Projets</div></a>
					<a href="sites/projets.php"><div class="ongletAnimAccueil cube col-2">Événements</div></a>
				</div>

			<?php
				//sur toutes les autres pages du site
				else :
			?>
					
				<div id="enteteGeneral">

					<a href="../index.php" rel="home">
						<img class="logotim" src="../img/Logo3D.png" alt="Logo du TIM">
					</a>

					<h1 class="titreEntete">Technique<br>d'Intégration<br>Multimédia</h1>

					<div id="menuBurger">
						<div id="back"></div>
						<div id="front"></div>
					</div>
				</div>

				<div id="entetePage">
					<hr class="ligneSeparatrice">
					<h2><?= $headInfo[$page]["h2page"]?></h2>
				</div>

				<?php
			endif;
				?>


		</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
