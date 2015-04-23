<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Buscar</title>
	<meta name="description" content="SliTaz GNU/Linux custom search engine"/>
	<meta name="keywords" lang="es" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
	<meta name="author" content="Eduardo Suarez-Santana"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Buscar</h4>
		<p>
			Esta página te permite buscar en toda la web de SliTaz GNU/Linux, en los
			archivos de la <a href="mailing-list.php">lista de correo</a>  
			y además en el <a href="http://forum.slitaz.org/">Foro</a>.
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load('search', '1', {language : 'es', style : google.loader.themes.MINIMALIST});
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
