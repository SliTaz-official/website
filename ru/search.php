<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Поиск | SliTaz</title>
	<meta name="description" content="Движок пользовательского поиска SliTaz GNU/Linux" />
	<meta name="keywords" lang="ru" content="система, свободная, gnu, linux, открытое ПО, Live-CD LINUX in RAM" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.ru.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Поиск</h4>

		<p>Эта страница позволяет выполнить поиск по всему сайту SliTaz GNU/Linux, в <a href="http://doc.slitaz.org/">документации</a> вики, в архиве <a href="mailing-list.php">рассылки</a>, а также на <a href="http://forum.slitaz.org/">форуме</a>. Эта поисковая система была создана специально для SliTaz с помощью пользовательского поиска Google™.</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;">Загрузка…</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	  google.load('search', '1', {language : 'ru', style : google.loader.themes.MINIMALIST});
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
			padding: 2px 10px;
			font-size: 14px;
			margin-left: -4px;
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

<?php include("../lib/html/footer.ru.html"); ?>

</body>
</html>
