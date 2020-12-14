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

		<!-- Link la police Roboto -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 

	<?php endif; ?>
</head>
<body>
	<div id="page" class="site">

	<header class="<?= $page=="index"?'site-header-main':'site-header-general'?>">
		<div class="site-branding">
			<?php

				//si on est sur la page d'accueil
				if ($page=="index") :

			?>
				<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Changer les textes en php ici !!!!!!!!!!!!!!!!!!!!!!!!-->
				
				<div class="petit-ecran">
					<div id="boiteABurger">
						<div id="menuBurger">
							<div id="front">
								<img src="img/boutonBurger.png" alt="Bouton Burger"/>
								<div>
									<ul>
										<li><a href='sites/cheminement.php'>Cheminement</a></li>
										<li><a href='sites/enseignants.php'>Enseignants</a></li>
										<li><a href='sites/projets.php'>Projets</a></li>
										<li><a href='sites/evenements.php'>Évènements</a></li>								
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="grand-ecran">
					<div class='container'>
						<a href="sites/cheminement.php"><div class="ongletAnimAccueil cube col-2">Cheminement</div></a>
						<a href="sites/enseignants.php"><div class="ongletAnimAccueil cube col-2">Enseignants</div></a>
						<a href="sites/projets.php"><div class="ongletAnimAccueil cube col-2">Projets</div></a>
						<a href="sites/evenements.php"><div class="ongletAnimAccueil cube col-2">Évènements</div></a>
					</div>
				</div>
			<?php
				//sur toutes les autres pages du site
				else :
			?>
					
				<div id="enteteGeneral">

					<a href="../index.php" rel="home">
						<img class="logotim" src="../img/Logo3D.png" alt="Logo du TIM">
					</a>

					<h1 class="titreEntete">Techniques<br>d'intégration<br>multimédia</h1>
					<div id="boiteABurger">
						<div id="menuBurger">
							<div id="front">
							<img src="../img/boutonBurger.png" alt="Bouton Burger"/>
							<div>
								<ul>
									<?php 
									
									switch ($page) {
										case 'cheminement':
											echo(
											"<li><a href='../index.php'>Accueil</a></li>
											<li><a href='enseignants.php'>Enseignants</a></li>
											<li><a href='projets.php'>Projets</a></li>
											<li><a href='evenements.php'>Évènements</a></li>");
											break;
										case 'enseignants':
											echo(
											"<li><a href='../index.php'>Accueil</a></li>
											<li><a href='cheminement.php'>Cheminement</a></li>
											<li><a href='projets.php'>Projets</a></li>
											<li><a href='evenements.php'>Évènements</a></li>");
											break;
										case 'evenements':
											echo(
											"<li><a href='../index.php'>Accueil</a></li>
											<li><a href='cheminement.php'>Cheminement</a></li>
											<li><a href='enseignants.php'>Enseignants</a></li>
											<li><a href='projets.php'>Projets</a></li>");
											break;
										case 'projets':
											echo(
											"<li><a href='../index.php'>Accueil</a></li>
											<li><a href='cheminement.php'>Cheminement</a></li>
											<li><a href='enseignants.php'>Enseignants</a></li>
											<li><a href='evenements.php'>Évènements</a></li>");
											break;
										
										default:
											# code...
											break;
									}
									?>
									
							
								</ul>
							</div>
							</div>
						</div>
					</div>
				</div>

				<div id="entetePage">
					<hr class="ligneSeparatrice">
					<h2 class="titrePage"><?= $headInfo[$page]["h2page"]?></h2>
					<hr class="ligneSeparatrice">
				</div>

				<?php
			endif;
				?>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->