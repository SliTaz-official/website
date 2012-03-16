<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
    <title>SliTaz - Procurar</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="SliTaz GNU/Linux custom search engine" />
    <meta name="keywords" lang="pt" content="sistema, livre, gnu, linux, software opensource, livecd LINUX na RAM" />
    <meta name="author" content="Claudinei Pereira" />
    <?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.pt.html"); ?>

<!-- Block -->
<div id="block">
    <?php include("../lib/html/nav.pt.html"); ?>
    <!-- Information/image -->
	<div id="block_info">
		<h4>Procurar</h4>
		<p>
			Esta p�gina permite a voc� buscar em todo o site do SliTaz 
			GNU/Linux, nos arquivos da <a href="mailing-list.php">Lista 
			de Discuss�o</a> e tamb�m no <a href="http://forum.slitaz.org">F�rum</a>.
			Esta p�gina foi criada para o SliTaz pelo sistema de buscas
			personalizadas Google Co-op.
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;">Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	  google.load('search', '1', {language : 'pt', style : google.loader.themes.MINIMALIST});
	  google.setOnLoadCallback(function() {
	    var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
	    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	    var options = new google.search.DrawOptions();
	    options.setSearchFormRoot('cse-search-form');
	    customSearchControl.draw('cse', options);
	  }, true);
	</script>
	<style type="text/css">
		input.gsc-search-button {
		   border: 1px solid #b64b22;
			background-color: #b64b22;
			color: white;
			font-weight: bold;
			cursor: pointer;
			padding: 3px 10px;
			font-size: 14px;
			margin-left: -2px;
			-webkit-border-top-right-radius: 4px;
			-webkit-border-bottom-right-radius: 4px;
			-moz-border-radius-topright: 4px;
			-moz-border-radius-bottomright: 4px;
			border-top-right-radius: 4px;
			border-bottom-right-radius: 4px;
		}
		.gs-webResult.gs-result a.gs-title:link,
		.gs-webResult.gs-result a.gs-title:link b {
			color: #103a5e;
		}
		#cse { margin-bottom: 120px; }
	</style>
</div>

<div id="cse" style="width:100%;"></div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.pt.html"); ?>

</body>
</html>
