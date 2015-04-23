<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Пакеты | SliTaz</title>
	<meta name="description" content="Пакеты LiveCD SliTaz GNU/Linux"/>
	<meta name="keywords" lang="ru" content="пакет, tazpkg"/>
	<meta name="author" content="Christophe Lincoln, Paul Issot"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.ru.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Пакеты</h4>
		<p>В этой части сайта вы можете просматривать все пакеты ПО, доступные
			на зеркале SliTaz. Страницы обновляются автоматически ежедневно
			через cron. Любой из пакетов можно установить при помощи менеджера
			пакетов Tazpkg (с графическим интерфейсом) или командой
			<code>tazpkg get-install имя_пакета</code>.</p>
		<p>Просмотр пакетов через веб-интерфейс:
			<a href="http://pkgs.slitaz.org/stable/">Stable</a> |
			<a href="http://pkgs.slitaz.org/cooking/">Cooking</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<div style="text-align: center; margin-bottom: 40px;">
	<form method="post" action="http://pkgs.slitaz.org/">
		<div class="searchbox">
			<p>
				<input type="hidden" name="lang" value="ru" />
				<input type="text" name="query" size="24" style="width: 80%;" />
				<input type="submit" name="search" value="Искать" />
			</p>
		</div>
		Искать:
		<select name="object">
			<option value="Package">пакет</option>
			<option value="Desc">описание</option>
			<option value="Tags">теги</option>
			<option value="Depends">зависимости</option>
			<option value="BuildDepends">зависимости сборки</option>
			<option value="File">файл</option>
			<option value="File_list">список файлов</option>
			<option value="FileOverlap">общие файлы</option>
		</select>
		в
		<select name="version">
			<option value="cooking">Cooking</option>
			<option value="stable">Stable</option>
			<option value="2.0">2.0</option>
			<option value="1.0">1.0</option>
		</select>
	</form>
</div>

<div class="box">
	<img src="/images/text.png" alt="*" />
	Полный список пакетов:
	<a href="http://mirror.slitaz.org/packages/stable/packages.list">Stable</a> |
	<a href="http://mirror.slitaz.org/packages/cooking/packages.list">Cooking</a><br />
	<img src="/images/network.png" alt="*" />
	Основное зеркало:
	<a href="http://mirror.slitaz.org/packages/">http://mirror.slitaz.org/packages/</a>
</div>


<h2>Деятельность</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<img src="/images/development.png" alt="*" />
		Последние коммиты в wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/?sort=lastchange">Ещё…</a>
	</p>
</div>


<h2>Документация</h2>

<p>Проект SliTaz содержит подробную <a href="http://doc.slitaz.org/"
	>документацию</a>, из которой вы узнаете, как устанавливать и управлять
	пакетами в дистрибутиве SliTaz GNU/Linux. На <a
	href="http://forum.slitaz.org/">форуме поддержки</a> вам помогут в случае
	проблем, там же вы можете оставить просьбу на создание нового пакета.</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
