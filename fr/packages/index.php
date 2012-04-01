<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz Packages</title>
	<meta name="description" content="Recherche et information sur les paquets slitaz" />
	<meta name="keywords" lang="fr" content="tazpkg, paquet slitaz" />
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
		<h4>Paquets</h4>
		<p>
			Cette partie du site permet de voir ou trouver les paquets
			logiciels disponibles sur le miroir de SliTaz. Les pages 
			sont mises à jour automatiquement via une tâche cron. Tous
			les paquets sont installables via le gestionnaire de 
			paquets Tazpkg, graphiquement en quelques cliques de souris 
			ou avec la commande <code>tazpkg get-install pkgname</code>.
		</p>
		<p>
			Naviguer dans l'interface web des paquets: 
			<a href="http://pkgs.slitaz.org/stable/">Stable</a>
			| <a href="http://pkgs.slitaz.org/cooking/">Cooking</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/search.cgi">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="fr" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Recherche" />
			</p>
		</div>
		Recherche de:
		<select name="object">
			<option value="Package">Paquet</option>
			<option value="Desc">Description</option>
			<option value="Tags">Tags</option>
			<option value="Depends">Depends</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">Fichier</option>
			<option value="File_list">Liste des fichiers</option>
			<option value="FileOverlap">Fichiers communs</option>
		</select>
		dans
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="/images/text.png" alt="[ ]" />
	Raw packages.list:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list"
		>Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list"
		>Cooking</a><br />
	<img src="/images/network.png" alt="[ ]" />
	Main mirror:
	<a href="http://mirror.slitaz.org/packages/"
		>http://mirror.slitaz.org/packages/</a>
</div>

<h2>Documentation</h2>

<p>
	Le projet SliTaz fournit de la
	<a href="http://doc.slitaz.org/">documentation</a> détaillé
	pour vous permettre d'apprendre à instller et gérer vous paquets
	sur votre distribution SliTaz.

	Les membres du <a href="http://forum.slitaz.org/">forum de support</a>
	vous aiderons probablement en cas de problèmes, le forum est aussi
	une bonne place pour faire une demande d'un ou plusieurs nouveaux
	paquets. members 
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.html"); ?>

</body>
</html>
