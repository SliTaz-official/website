<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Архив новостей | SliTaz</title>
	<meta name="description" content="Архив новостей SliTaz"/>
	<meta name="keywords" lang="ru" content="система, свободная, Gnu, Linux, открытое ПО, Livecd в RAM"/>
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
			(в основном это документы, которые перемещены в свой собственный
			домен).</p>
		<p><img src="/images/news.png" alt="*" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a> |
			<a href="2009.php">2009</a> | <a href="2010.php">2010</a> |
			<a href="2011.php">2011</a> | <a href="2012.php">2012</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2011</h2>

<ul>
	<li id="d20110531">
		<strong>31 мая 2011 — Новый и свежий Cooking 20110531</strong>
		<p>Команда SliTaz с гордостью объявляет о выпуске новой версии Cooking,
			собранной из наших новых и свежих пакетов от CookUtils. CookUtils —
			один из инструментов нового поколения для создания пакетов SliTaz,
			он содержит Build Bot (сборочный бот) с хорошим веб-интерфейсом,
			который работает «из коробки» на любой системе SliTaz. Эти новые
			пакеты были собраны с новым тулчейном, оптимизированным под
			архитектуру i486.</p>
		<p>Процесс загрузки был полностью переработан, теперь первая настройка
			параметров во время загрузки осуществляется с помощью диалогов GTK
			в X-сессии, время загрузки также сокращено. Эта версия идет с новой
			графической утилитой для настройки системы, и с нашей новой панелью
			настройки системы, также известной как TazPanel. С помощью TazPanel
			можно настроить всю систему через xHTML/CSS веб-интерфейс (полезно
			для дистанционного управления) и управлять пакетами; она заменила
			старые диалоги GTK.</p>
		<p>Xorg теперь поддерживает DRI, таким образом LibDRM, Linux-DRM и
			Linux-AGP являются частью основного ISO. Это добавляет 1 МБ
			к сжатой корневой файловой системе. Но нам удалось сэкономить много
			места в основном ISO с нашими новыми пакетами, и этот новый Cooking
			занимает 30 МБ! Этот новый релиз Cooking также обеспечивает более
			лучшую интернационализацию и поддержку итальянского языка. Скачать:
			<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
			>slitaz-cooking.iso</a></p></li>

	<li id="d20110329">
		<strong>29 марта 2011 — Новый Cooking 20110329</strong>
		<p>Команда SliTaz рада объявить о выпуске нового ISO Cooking с более чем
			2900 пакетами. Все пакеты были пересобраны с помощью нашей новой
			утилиты, которая теперь включена в TazWok. Релиз содержит ядро
			Linux 2.6.37 скомпилированное с Glibc 2.13, Binutils 2.21 и
			GCC 4.5.2. Основной LiveCD включает Midori 0.3.3. TazPkg
			в настоящее время полностью переведен на французский, и мы открыты
			для дополнительных переводов. TazWok был полностью переписан,
			и теперь можно пересобрать SliTaz с нуля, используя любой ISO. Этот
			ISO — первый в серии релиз-кандидатов, который ведет нас
			к стабильному релизу 4.0.</p>
		<p>Большая работа была проделана с момента выпуска нашего последнего ISO
			Cooking в ноябре: более 2200 изменений было совершено в wok,
			и более нескольких сотен изменений — в наших собственных утилитах.
			Мы рады сообщить, что сообщество SliTaz сильно выросло за последние
			месяцы: за прошедший год было внесено больше изменений, чем
			в предыдущие четыре года. Однако, количество не означает качество.
			Вы нужны нам, чтобы помочь протестировать этот новый ISO и сообщить
			о возможных ошибках. Если вы захотите, вы сможете помочь исправить
			известные проблемы до релиза 4.0. Вы можете связаться с участниками
			команды через наш IRC, рассылку, форум, или написав электронное
			письмо мэйнтейнерам пакетов. Мы надеемся, вам понравится этот новый
			<a href="../get/">релиз</a>!</p></li>
	<li id="d20140216">
		<strong>16 Feb 2014 - New SliTaz Cooking Release</strong>
	<p>
		The Slitaz team is proud to announce the release of a new Cooking
		version which paves the road to SliTaz 5.0. This new Cooking includes
		almost 2 years of work and has an incredible ChangeLog. All our home
		made tools have been improved with some great new tools such as 
		'frugal' or 'decode'. We focused a lot of work on Desktop integration
		to provide a finer user experience and have largely improved the Linux
		Kernel (3.2.53) configuration.
	</p>
	<p>
		On the packages side we updated all existing packages and also added
		a bunch of new packages to reach more than 4200 packages in the 
		Cooking database. Lots of work has also been done on the SliTaz 
		installer which provides a new Ncurses/text front-end.
	</p>
	<p>
		The LiveCD will now ask for language settings before booting so users
		can get directly to the Desktop after boot scripts have been executed.
		The size of the ISO image has grown a little due to better hardware
		support and new functions. You can download the ISO image from a SliTaz
		mirror (40 Mb): 
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso"
			>slitaz-cooking.iso</a>
		[ <a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.md5"
			>md5</a> ]
	</p>
	</li>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
