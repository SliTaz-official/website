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
<h2>Поиск пакетов</h2>

<p>
Ищите <a href="http://pkgs.slitaz.org/">пакеты</a>, файлы, журналы сборки, рецепты и т.п.
Любой пакет можно установить при помощи менеджера пакетов TazPkg — через GUI или в командной строке командой
<code>tazpkg get-install pkgname</code>.
</p>

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="ru" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Search" />
			</p>
		</div>
		Искать:
		<select name="object">
			<option value="Package">название пакета</option>
			<option value="Desc">описание</option>
			<option value="Tags">ярлык</option>
			<option value="Arch">архитектурa</option>
			<option value="Bugs">баги</option>
			<option value="Depends">зависимости</option>
			<option value="BuildDepends">зависимости сборки</option>
			<option value="File">файл</option>
			<option value="File_list">список файлов</option>
			<option value="FileOverlap">общие файлы</option>
			<option value="Category">категория</option>
			<option value="Maintainer">мэйнтейнер</option>
			<option value="License">лицензия</option>
		</select>
		в
		<select name="version">
			<option value="5.0 cooking">cooking</option>
			<option value="4.0 stable">stable</option>
			<option value="backports">backports</option>
			<option value="3.0">3.0</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
			<option value="tiny">tiny</option>
			<option value="undigest">undigest</option>
		</select>
	</form>
</div>


<h2>Поиск Google</h2>

<p>
Эта страница позволяет выполнить поиск по всему сайту SliTaz GNU/Linux, в <a href="http://doc.slitaz.org/">документации</a> вики, в архиве <a href="mailing-list.php">рассылки</a>, а также на <a href="http://forum.slitaz.org/">форуме</a>.
Эта поисковая система была создана специально для SliTaz на основе пользовательского поиска GoogleTM.
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
