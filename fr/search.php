<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Search</title>
	<meta name="description" content="SliTaz GNU/Linux custom search engine"/>
	<meta name="keywords" lang="fr" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../lib/html/header.html");
include("../lib/html/nav-ng.fr.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<div id="content">
	
<h2>Recherche de paquets</h2>

<p>
	Recherche de <a href="http://pkgs.slitaz.org/">paquets</a>,
	fichiers, recettes, etc. Tous les paquets peuvent
	être installés avec le gestionnaire de paquets Tazpkg par
	l'interface graphique ou la commande 
	<code>tazpkg get-install pkgname</code>.
</p>

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="fr" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Rechercher" />
			</p>
		</div>
		Recherche de :
		<select name="object">
			<option value="Package">Paquet</option>
			<option value="Desc">Description</option>
			<option value="Tags">Tags</option>
			<option value="Arch">Arch</option>
			<option value="Bugs">Bugs</option>
			<option value="Depends">Dépendances</option>
			<option value="BuildDepends">Dépendances de fabrication</option>
			<option value="File">Fichier</option>
			<option value="File_list">Liste des fichiers</option>
			<option value="FileOverlap">Fichiers commun</option>
			<option value="Category">Catégorie</option>
			<option value="Maintainer">Mainteneur</option>
			<option value="License">License</option>
		</select>
		dans la version
		<select name="version">
			<option value="cooking">cooking</option>
			<option value="stable">stable</option>
			<option value="backports">backports</option>
			<option value="3.0">3.0</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
			<option value="tiny">tiny</option>
			<option value="undigest">undigest</option>
		</select>
	</form>
</div>

<h2>Recherche Google</h2>

<p>
	Cette page vous permet de lancer une recherche, sur 
	l'ensemble du site web de SliTaz GNU/Linux, le wiki de
	<a href="http://doc.slitaz.org/">documentation</a>, dans
	l'archive de <a href="mailing-list.php">la liste de discussion</a>
	et dans <a href="http://forum.slitaz.org/">le forum</a>. Ce
	moteur de recherche a été créé pour SliTaz, via le service
	Google Co-op, permettant de construire son propre moteur de
	recherche personnalisé.
</p>

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load('search', '1', {language : 'fr', style : google.loader.themes.MINIMALIST});
		google.setOnLoadCallback(function() {
		var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		var options = new google.search.DrawOptions();
		options.setSearchFormRoot('cse-search-form');
		customSearchControl.draw('cse', options);
		}, true);
	</script>
</div>

<div id="cse"></div>
 
<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
