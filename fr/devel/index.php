<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz - Coin d�veloppeurs</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="D�veloppement de SliTaz GNU/Linux" />
	<meta name="keywords" lang="fr" content="developpement slitaz developer GNU Linux" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>D�veloppement</h4>
		<p>
			SliTaz est une distribution communautaire faite par beaucoup
			de personnes au travers le monde et tout le monde est le
			bienvenue pour aider et s'impliquer dans le projet.
		</p>
		<p>
			<img src="../../images/users.png" alt="users.png" />
			<a href="http://scn.slitaz.org/">Rejoingez nous sur SCN</a>
			et la <a href="../mailing-list.php">mailing list</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>Le coin du d�veloppeur SliTaz</h2>

<ul>
	<li><a href="forge.php">Forge</a> - Gestion collaborative du d�veloppement,
	Hg, paquets et ligne de conduite (Guidelines).</li>
    <li><a href="../mailing-list.php">Liste de discussion</a> -
    La <em>mailing list</em> est le moyen de collaboration principale.</li>
    <li><a href="../../i18n.php">Internationalisation du projet</a> -
    Traduction, buts et fonctionnement (en).</li>
    <li><a href="http://doc.slitaz.org/fr:cookbook:wok">Wok &amp; Tools</a> -
    La doc au sujet de l'utilisation du wok et des outils SliTaz pour
    d�veloppeurs.</li>
    <li><a href="http://hg.slitaz.org" >Mercurial Repositories</a></li>
    <li><a href="http://labs.slitaz.org/">SliTaz Laboratories</a></li>
</ul>

<h3>Participer et contribuer</h3>
<p>
Le d�veloppement de SliTaz est ouvert, toute personne est la bienvenue au
sein du projet. Utilisateur, utilisateur avanc�, connaisseur ou d�veloppeur.
Il y a toujours quelque chose � faire : relecture des pages de documentation,
retour d'utilisation, cr�ation de scripts, conseils, cr�ation de paquets,
�criture de documentation, rapport de bug ou tout simplement une suggestion.
Pour commencer vous pouvez jeter un coup d'oeil au livre de cuisine ou
<a href="http://doc.slitaz.org/fr:cookbook:start">Cookbook</a> afin de comprendre comment SliTaz 
se construit. Pour cr�er une nouvelle page dans un des livres, vous pouvez
utiliser le mod�le <a href="../doc/handbook/template.html">template.html</a>
du Handbook pour r�diger votre texte et l'envoyer par mail sur la
<a href="../mailing-list.php">mailing list</a> pour relecture et discussion
ou la soumettre sur les laboratoires du projet. 
<a href="http://scn.slitaz.org/">SCN</a> vous permettent aussi de 
suivre le projet, d'aider � r�soudre des bugs ou satisfaire des demandes,
d'envoyer des fichiers, scripts ou page du site.
</p>
<p>
Pour les artistes il y a un site web d�di�, il suffit de cr�er un compte et
poster vos images ou th�mes graphique. Le site est g�r� par la communaut�,
si vous avez envie de donner un coup de main pour l'administration du site,
n'h�sitez pas � contacter un contributeur ou envoyer un mail sur la liste
de discussion. Le site scn.slitaz.org: 
<a href="http://scn.slitaz.org/groups/artwork/">SliTaz Community Artwork</a>
</p>

<h3>Cycle de publication</h3>
<p>
La version en cuisson (<em>Cooking</em>) est l� pour pr�parer la future version
stable. Elle permet de tester les nouveaut�s, peut �tre cass�e et contient
des bugs, pas encore d�couverts ou non r�solus. Une nouvelle version est publi�e
quand suffisamment de nouveaut�s ou de corrections ont �t� apport�es.
</p>
<p>
Pour la version stable, nous misons sur une version par ann�e, bien test�e, 
stable, robuste et proposant des mises � jour de s�curit� pour les paquets
officiels. C'est aussi un bon moyen pour pr�parer une mise � jour de version 
la plus simple et stable possible.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
