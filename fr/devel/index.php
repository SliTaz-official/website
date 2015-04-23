<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Coin développeurs</title>
	<meta name="description" content="Développement de SliTaz GNU/Linux"/>
	<meta name="keywords" lang="fr" content="developpement slitaz developer GNU Linux"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.fr.html"); 
include("../../lib/html/nav.fr.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Le coin du développeur SliTaz</h2>

<p>
	SliTaz est une distribution communautaire faite par beaucoup
	de personnes à travers le monde et chacun est le
	bienvenu pour aider et s'impliquer dans le projet.
</p>

<ul>
	<li><a href="forge.php">Forge</a> - Gestion collaborative du développement,
	Hg, paquets et ligne de conduite (Guidelines).</li>
    <li><a href="../mailing-list.php">Liste de discussion</a> -
    La <em>mailing list</em> est le moyen de collaboration principale.</li>
    <li><a href="/i18n.php">Internationalisation du projet</a> -
    Traduction, buts et fonctionnement (en).</li>
    <li><a href="http://doc.slitaz.org/fr:cookbook:wok">Wok &amp; Tools</a> -
    La doc au sujet de l'utilisation du wok et des outils SliTaz pour
    développeurs.</li>
    <li><a href="http://hg.slitaz.org" >Mercurial Repositories</a></li>
    <li><a href="http://labs.slitaz.org/">SliTaz Laboratories</a></li>
</ul>

<h3>Participer et contribuer</h3>

<p>
	Le développement de SliTaz est ouvert, toute personne est la bienvenue au
	sein du projet. Utilisateur, utilisateur avancé, connaisseur ou développeur.
	Il y a toujours quelque chose à faire : relecture des pages de documentation,
	retour d'utilisation, création de scripts, conseils, création de paquets,
	écriture de documentation, rapport de bug ou tout simplement une suggestion.
	Pour commencer vous pouvez jeter un coup d'oeil au livre de cuisine ou
	<a href="http://doc.slitaz.org/fr:cookbook:start">Cookbook</a> afin de comprendre comment SliTaz 
	se construit. Pour créer une nouvelle page dans un des livres, vous pouvez
	utiliser le modèle <a href="../doc/handbook/template.html">template.html</a>
	du Handbook pour rédiger votre texte et l'envoyer par mail sur la
	<a href="../mailing-list.php">mailing list</a> pour relecture et discussion
	ou la soumettre sur les laboratoires du projet. 
	<a href="http://scn.slitaz.org/">SCN</a> vous permettent aussi de 
	suivre le projet, d'aider à résoudre des bugs ou satisfaire des demandes,
	d'envoyer des fichiers, scripts ou page du site.
</p>

<p>
	Pour les artistes il y a un site web dédié, il suffit de créer un compte et
	poster vos images ou thèmes graphique. Le site est géré par la communauté,
	si vous avez envie de donner un coup de main pour l'administration du site,
	n'hésitez pas à contacter un contributeur ou envoyer un mail sur la liste
	de discussion. Le site scn.slitaz.org: 
	<a href="http://scn.slitaz.org/">SliTaz Community</a>
</p>

<h3>Cycle de publication</h3>

<p>
	La version en cuisson (<em>Cooking</em>) est là pour préparer la future version
	stable. Elle permet de tester les nouveautés, peut être cassée et contient
	des bugs, pas encore découverts ou non résolus. Une nouvelle version est publiée
	quand suffisamment de nouveautés ou de corrections ont été apportées.
</p>

<p>
	Pour la version stable, nous misons sur une version par année, bien testée, 
	stable, robuste et proposant des mises à jour de sécurité pour les paquets
	officiels. C'est aussi un bon moyen pour préparer une mise à jour de version 
	la plus simple et stable possible.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
