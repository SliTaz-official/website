<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz - Recherche</title>
	<meta name="description" content="SliTaz recherche site web google doc info book" />
	<meta name="keywords" lang="fr" content="search, google, slitaz.org, doc" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.fr.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Recherche</h4>
		<p>
			Cette page vous permet de lancer une recherche, sur 
			l'ensemble du site web de SliTaz GNU/Linux, dans l'archive
			de <a href="mailing-list.php">la liste de discussion</a>
			et dans <a href="http://forum.slitaz.org/">le forum</a>. Ce
			moteur de recherche a été créé pour SliTaz, via le service
			Google Co-op, permettant de construire son propre moteur de
			recherche personnalisé.
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;">Loading</div>
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
