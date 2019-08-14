<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Suche</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="en" content="System, free, gnu, linux, software opensource, livecd LINUX in RAM"/>
	<meta name="author" content="F Steiner (Sevala)"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../config.php");
include("../lib/html/header.html");
include("../lib/html/nav.de.html");
include("../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Suche</h2>

<?php if (false) { ?>
<p>
	Auf dieser Seite können Sie die gesamte Projektseite von 
	SliTaz GNU/Linux, die Archive der 
	<a href="mailing-list.php">Mailing Listen</a> und das 
	<a href="http://forum.slitaz.org/">Forum</a> nach Begriffen
	durchsuchen. Die Suchfunktion wurde für SliTaz von der 
	"Google Co-op custom search engine" zur Verfügung gestellt.
</p>

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load('search', '1', {language : 'de', style : google.loader.themes.MINIMALIST});
		google.setOnLoadCallback(function() {
		var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		var options = new google.search.DrawOptions();
		options.setSearchFormRoot('cse-search-form');
		customSearchControl.draw('cse', options);
		}, true);
	</script>
</div>
<?php } if (true) { ?>
<p>
	Auf dieser Seite können Sie die gesamte Projektseite von 
	SliTaz GNU/Linux, die Archive der 
	<a href="mailing-list.php">Mailing Listen</a> und das 
	<a href="http://forum.slitaz.org/">Forum</a> nach Begriffen
	durchsuchen.
</p>

<div class="searchbox">
	<iframe src="https://duckduckgo.com/search.html?t=slitaz&kl=de-de&duck=yes&site=www.slitaz.org,doc.slitaz.org,forum.slitaz.org,https://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/&prefill=Benutzerdefinierte Suche"
	 style="overflow:hidden;margin:0;padding:0;width:603px;height:60px;" frameborder="0">
	</iframe>
</div>
<?php } ?>

<div id="cse"></div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
