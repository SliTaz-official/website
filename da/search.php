<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@live.dk
   Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
   visit our hackerspace every tuesday evening for free - always hot coffee --> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<title>SliTaz - Search</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz GNU/Linux søgemaskine" />
	<meta name="keywords" lang="da" content="operativsystem, fri, gratis, gnu, linux, åben kildekode, livecd LINUX i hukommelse" />
	<meta name="author" content="Linux User"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.da.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.da.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Søgning</h4>
		<p>
		Denne side tillader dig at gennemsøge hele SliTa GNU/Linux hjemmesiden,
		 <a href="http://doc.slitaz.org/">vejledningswikien</a>,  i
		 <a href="mailing-list.php">postlistens arkiver</a>
		og i  <a href="http://forum.slitaz.org/">forumet</a>.
      Denne søgemaskine er lavet for SliTaz af  Google Co-op custom
		søgemaskinen.
	</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php"><img src="../images/locale.png" alt="Sprog:" /></a>
	<b>Dansk</b> 
	<a href="../de/search.php">Deutsch</a>
	<a href="../en/search.php">English</a>
	<a href="../es/search.php">Español</a>
	<a href="../fr/search.php">Français</a>
	Indonesian
	Italiano
	<a href="../pt/search.php">Português</a>
	<a href="../ru/search.php">Русский</a>
	<a href="../cn/search.php">中文</a>
</div>

<!-- Content -->
<div id="content">

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;">Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	  google.load('search', '1', {language : 'en', style : google.loader.themes.MINIMALIST});
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

<?php include("../lib/html/footer.da.html"); ?>

</body>
</html>
