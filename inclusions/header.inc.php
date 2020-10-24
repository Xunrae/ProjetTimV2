<?php
    $headInfo = [
        "index"         =>  [
			"title" =>  "TIM - Accueil",
			"description" => "Accueil du site du TIM"
        ],
        "cheminement"   =>  [
            "title" =>  "TIM - Cheminement",
			"description" => "Cheminement scolaire au TIM"
		],
		"enseignants"   =>  [
            "title" =>  "TIM - Enseignants",
			"description" => "Description des enseignants du TIM"
		],
		"projets"   =>  [
            "title" =>  "TIM - Projets",
			"description" => "Projets des anciens étudiants du TIM"
		],
		"evenements"   =>  [
            "title" =>  "TIM - Évènements",
			"description" => "Évènements au TIM"
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

	<link href="css/normalize.css"
			type="text/css"
			rel="stylesheet">

	<link href="style.css"
			type="text/css"
			rel="stylesheet">

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
				<p class="site-title"><a href="../index.php" ?></a></p>
				<?php
			endif;
				?>


		</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
