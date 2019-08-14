<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Search</title>
	<meta name="description" content="SliTaz GNU/Linux søgemaskine"/>
	<meta name="keywords" lang="da" content="operativsystem, fri, gratis, gnu, linux, åben kildekode, livecd LINUX i hukommelse"/>
	<meta name="author" content="Linux User"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@live.dk
   Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
   visit our hackerspace every tuesday evening for free - always hot coffee --> 

<?php include("../lib/html/header.da.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.da.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Søgning</h4>
		<p>
		Denne side tillader dig at gennemsøge hele SliTaz GNU/Linux hjemmesiden,
		 <a href="http://doc.slitaz.org/">vejledningswikien</a>,  i
		 <a href="mailing-list.php">postlistens arkiver</a>
		og i  <a href="http://forum.slitaz.org/">forumet</a>.
<?php if (false) { ?>
      Denne søgemaskine er lavet for SliTaz af  Google Co-op custom
		søgemaskinen.
<?php } ?>
	</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div class="searchbox">
<?php if (false) { ?>
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
		google.load('search', '1', {language : 'da', style : google.loader.themes.MINIMALIST});
		google.setOnLoadCallback(function() {
		var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		var options = new google.search.DrawOptions();
		options.setSearchFormRoot('cse-search-form');
		customSearchControl.draw('cse', options);
		}, true);
	</script>
<?php } if (true) { ?>
	<iframe src="https://duckduckgo.com/search.html?t=slitaz&kl=dk-da&duck=yes&site=www.slitaz.org,doc.slitaz.org,forum.slitaz.org,https://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/&prefill=Tilpasset søgning"
	 style="overflow:hidden;margin:0;padding:0;width:603px;height:60px;" frameborder="0">
	</iframe>
<?php } ?>
</div>

<div id="cse"></div>
 
<!-- End of content -->
</div>

<?php include("../lib/html/footer.da.html"); ?>

</body>
</html>
