<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Архив новостей за 2011 год | SliTaz</title>
	<meta name="description" content="Архив новостей SliTaz за 2011 год" />
	<meta name="keywords" lang="ru" content="система, свободная, Gnu, Linux, открытое ПО, Livecd в RAM" />
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.ru.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Архивы новостей</h4>
		<p>Архивы новостей сайта по годам. Обратите внимание, что некоторые
			ссылки могут быть испорчены из-за изменения структуры сайта
			(в основном это документы, которые перемещены в свой ​​собственный
			домен).</p>
		<p><img src="/images/news.png" alt="*" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a> |
			<a href="2009.php">2009</a> | <a href="2010.php">2010</a> |
			2011 | <a href="2012.php">2012</a> |
			<a href="./">2014</a></p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2011</h2>

<ul>
	<li id="d20110531">
		<strong>31 May 2011 - New and fresh Cooking 20110531</strong>
	<p>
		The Slitaz team is proud to announce the release of a new Cooking version
		built with our new and fresh packages from cookutils. Cookutils is one of
		the new generation of tools to build SliTaz packages and provides a Build
		Bot with a nice web interface that works out-of-the-box on any SliTaz
		system. These new packages have been built with a new i486 optimized
		toolchain.
	</p>
	<p>
		The full boot process has been improved and the first boot configuration
		is now done through GTK boxes in a X session and the boot time is also
		faster. This version comes with a new GUI tool for system configuration
		as well as our new system configuration panel aka TazPanel. TazPanel
		lets you configure the entire system via a xHTML/CSS web interface
		(useful for remote control) and it also handles package management and
		replaces the old GTK box.
	</p>
	<p>
		Xorg now has dri support, so libdrm, linux-drm as well as linux-agp
		are part of the core ISO. This adds 1MB to the compressed root
		filesystem. But we managed to save a lot of space in the core ISO with
		our new packages and this new Cooking is 30MB! This new cooking also
		provides better internationalization and Italian support! Download:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">
			slitaz-cooking.iso</a>
	</p>
	</li>

	<li id="d20110329">
		<strong>29 March 2011 - New Cooking 20110329</strong>
	<p>
		The SliTaz team is pleased to announce the release of a new cooking
		ISO featuring over 2900 packages. All packages have been rebuilt using
		our new cooking tool, now included in tazwok. It contains Linux Kernel
		2.6.37 compiled against glibc 2.13, binutils 2.21 &amp; gcc 4.5.2. The Core
		LiveCD includes Midori 0.3.3. Tazpkg is now entirely translated to
		French and we are open to additional translations. Tazwok has been
		entirely rewritten and it's now possible to recook SliTaz from Scratch
		using any ISO. This ISO is the first of a release candidate series which
		leads us to a stable 4.0 release.
	</p>
	<p>
		A lot of work has been done since our last cooking ISO released in november:
		more than 2200 changes have been commited to the wok, and several
		hundreds more to home-built tools. We are proud to announce that the SliTaz
		community has grown a lot these last months: the last year, many
		changes was commited than in the previous four. However, quantity doesn't mean
		quality. We need you to help to test this new ISO and report eventual bugs. If
		you want to, you are welcome to help fix known problems before 4.0 is released.
		You can join members of the crew via our IRC, mailing-list, forums or by
		mailing the packages maintainers. We hope you will enjoy this new
		<a href="/en/get/">release!</a>
	</p>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>