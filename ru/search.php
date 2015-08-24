<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Поиск | SliTaz</title>
	<meta name="description" content="Движок пользовательского поиска SliTaz GNU/Linux"/>
	<meta name="keywords" lang="ru" content="система, свободная, gnu, linux, открытое ПО, Live-CD LINUX in RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../lib/html/header.ru.html");
include("../lib/html/nav.ru.html"); 
include("../lib/lang.php");
?>

<!-- Content -->
<div id="content">
<h2>Пакеты Поиск</h2>

<p>
	Search for <a href="http://pkgs.slitaz.org/">packages</a>,
	files, build logs, receipts, etc. All packages are installable
	via the package manager Tazpkg using the GUI or the command 
	<code>tazpkg get-install pkgname</code>.
</p>

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="en" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Search" />
			</p>
		</div>
		Search for:
		<select name="object">
			<option value="Desc">Package+Description</option>
			<option value="Package">Package(exact name)</option>
			<option value="Desc">Description</option>
			<option value="Tags">Tags</option>
			<option value="Arch">Arch</option>
			<option value="Bugs">Bugs</option>
			<option value="Depends">Depends</option>
			<option value="BuildDepends">BuildDepends</option>
			<option value="File">File</option>
			<option value="File_list">File list</option>
			<option value="FileOverlap">common files</option>
			<option value="Category">Category</option>
			<option value="Maintainer">Maintainer</option>
			<option value="License">License</option>
		</select>
		in
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

<h2>Google Поиск</h2>

<p>
	Эта страница позволяет выполнить поиск по всему сайту SliTaz
	GNU/Linux, в <a href="http://doc.slitaz.org/">документации</a> вики,
	в архиве <a href="mailing-list.php">рассылки</a>, а также на <a
	href="http://forum.slitaz.org/">форуме</a>. Эта поисковая система
	была создана специально для SliTaz на основе пользовательского
	поиска Google™.
</p>

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;"><img
		src="/images/loader.gif" alt="*" /> Loading</div>
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
</div>

<div id="cse"></div>
 
<!-- End of content -->
</div>

<?php include("../lib/html/footer.ru.html"); ?>

</body>
</html>
