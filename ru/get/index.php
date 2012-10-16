<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Загрузки | SliTaz</title>
	<meta name="description" content="Бесплатная загрузка LiveCD с SliTaz GNU/Linux" />
	<meta name="keywords" lang="ru" content="исходники, ISO, LiveCD, загрузить, бесплатно" />
	<meta name="author" content="Christophe Lincoln, Paul Issot"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.ru.html");
?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Загрузка</h4>
		<p>Загрузите последнюю стабильную версию для производственных целей,
			или, когда вам нужно надежное рабочее место. Тестируйте
			«готовящуюся» версию, чтобы помочь нам улучшить дистрибутив.</p>
		<div class="button">
			Быстрая загрузка:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">


<h2>Загрузить SliTaz</h2>

<ul>
	<li><a href="#stable">LiveCD стабильная версия</a> — загрузочный образ ISO
		текущей стабильной версии.</li>
	<li><a href="#cooking">LiveCD версия Cooking</a> — загрузочный образ ISO
		нестабильной («готовящейся») версии.</li>
	<li><a href="#floppy">Дискета</a> — загрузочная дискета для запуска LiveCD,
		флешки и т.п.</li>
	<li><a href="flavors.php">LiveCD на любой вкус</a> — редакции и loram.</li>
</ul>

<div class="box">
	<p>Помогите проекту своим небольшим пожертвованием или станьте нашим
		официальным <a href="../sponsor/">спонсором</a>.</p>
	<?php include("../../lib/html/donate.html"); ?>
</div>


<h3>Основная информация</h3>

<p>В этом разделе сайта вы можете загрузить бесплатную копию LiveCD SliTaz
	GNU/Linux и получить исходники утилит. Чтобы начать использовать ISO-образ
	LiveCD, вы можете обратиться к онлайн-<a href="../doc/">документации</a>.
	Вы можете также найти помощь и поддержку на <a
	href="http://forum.slitaz.org/">форуме</a> SliTaz.</p>


<h3>Зеркала</h3>

<p>SliTaz зеркалируется во Франции компаниями <a
	href="http://www.ads-lu.com/">ADS</a> и <a href="http://www.tuxfamily.org/"
	>TuxFamily</a>, в Швейцарии — <a href="http://mirror.switch.ch/"
	>SWITCHmirror</a>, в Китае — LupaWorld, в США — <a
	href="http://distro.ibiblio.org/pub/linux/distributions/">Ibiblio</a> и в
	Бразилии — <a href="http://www.c3sl.ufpr.br/en/index.html">UFPR</a>.
	Большое им спасибо!</p>

<ul>
	<li>Швейцария — зеркало предоставлено <b>SWITCHmirror</b> (10 Гбит/с) [
		<a href="http://mirror.switch.ch/ftp/mirror/slitaz/">HTTP</a> или
		<a href="ftp://mirror.switch.ch/mirror/slitaz/">FTP</a> ]</li>
	<li>Франция — зеркало предоставлено <b>TuxFamily</b> [
		<a href="http://download.tuxfamily.org/slitaz/">HTTP</a> или
		<a href="ftp://download.tuxfamily.org/slitaz/">FTP</a> ]</li>
	<li>Китай — зеркало предоставлено <b>LupaWorld</b> [
		<a href="http://mirror.lupaworld.com/slitaz/">HTTP</a> ]</li>
	<li>США — зеркало предоставлено <b>Ibiblio</b> [
		<a href="http://distro.ibiblio.org/pub/linux/distributions/slitaz/"
		>HTTP</a> или <a
		href="ftp://distro.ibiblio.org/pub/linux/distributions/slitaz/">FTP</a>
		]</li>
	<li>Бразилия — зеркало предоставлено <b>UFPR</b> [
		<a href="http://slitaz.c3sl.ufpr.br/">HTTP</a> или
		<a href="ftp://slitaz.c3sl.ufpr.br/slitaz/">FTP</a> ]</li>
</ul>


<h3 id="sources">Исходники</h3>

<p>Tazpkg (менеджер пакетов), Tazlito (Live-утилита), Tazwok (Source builder),
	Tazusb (LiveUSB-утилита) и архивы всех утилит SliTaz можно загрузить
	с зеркала <a href="http://www.tuxfamily.org/">TuxFamily</a>. Обратите
	внимание, что все эти утилиты по умолчанию установлены в SliTaz,
	а исходники прокомментированы на английском. Загрузите исходники: [ <a
	href="http://mirror.slitaz.org/sources/">HTTP</a> или <a
	href="http://mirror.slitaz.org/sources/">FTP</a> ]</p>


<h2 id="stable">LiveCD — стабильная версия</h2>

<p>SliTaz стабильной версии — это зрелая операционная система, основательно
	протестированная активным сообществом. Основной LiveCD предоставляет
	широкий выбор многофункциональных пакетов, тщательно интегрированных
	в дистрибутив, в результате чего получилась самодостаточная и надежная
	система.
	<?php echo "Текущая стабильная версия $stable_ver была выпущена
		$stable_rel."; ?></p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux $stable_ver ($stable_size) —
	<a href='$stable_iso'>slitaz-$stable_ver.iso</a>
	[ <a href='$mirror/$stable_ver/slitaz-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>

<p>Загрузочный образ компакт-диска со всеми доступными пакетами стабильной
	версии создается каждый день. Он также содержит копию сайта и может быть
	использован при помощи скрипта install.sh без подключения к Интернету.</p>

<div class="box-dl"><p>
	<?php echo "Коллекция пакетов SliTaz GNU/Linux версии $stable_ver ($stable_pkgs) —
	<a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.iso'>packages-$stable_ver.iso</a>
	[ <a href='$pkgs_mirror/$stable_ver/packages-$stable_ver.md5'>md5</a> ]"; ?>
</p></div>


<h2 id="cooking">LiveCD — нестабильная версия (Cooking)</h2>

<p>LiveCD SliTaz версии «Cooking» — постоянно развивающаяся версия, полностью
	пригодная к использованию, что позволяет вам протестировать последние
	улучшения и пакеты, запрашивать новые функции или сообщать об ошибках,
	чтобы помочь нам подготовиться к стабильной версии.</p>

<div class="box-dl"><p>
	<?php echo "SliTaz GNU/Linux «Cooking» $cooking_ver ($cooking_size) —
	<a href='$cooking_iso'>slitaz-$cooking.iso</a>
	[ <a href='$mirror/$cooking/slitaz-$cooking.md5'>md5</a> ]"; ?>
</p></div>

<p>Загрузочный образ DVD со всеми доступными пакетами версии «Cooking»
	создается каждый день. Он также содержит копию сайта и может быть
	использован при помощи скрипта install.sh без подключения к Интернету.
	Примечание: этот образ также может быть <a
	href="http://syslinux.zytor.com/wiki/index.php/Doc/isolinux#HYBRID_CD-ROM.2FHARD_DISK_MODE"
	>установлен на USB-флешку <em>(англ.)</em></a>, но при этом он затрёт на
	ней всю информацию.</p>

<div class="box-dl"><p>
	<?php echo "Коллекция пакетов SliTaz GNU/Linux версии «Cooking» ($cooking_pkgs) —
	<a href='$pkgs_mirror/cooking/packages-cooking.iso'>packages-cooking.iso</a>
	[ <a href='$pkgs_mirror/cooking/packages-cooking.md5'>md5</a> ]"; ?>
</p></div>


<h2 id="floppy">Загрузочная дискета</h2>

<p>Эта дискета может запустить SliTaz на старых компьютерах с CD-ROM или
	без него. Возможна также загрузка SliTaz с флешки, CD/DVD, жесткого диска,
	локальной сети по PXE, и даже через <a href="http://boot.slitaz.org/"
	>интернет с помощью gPXE</a>.</p>

<div class="box-dl"><p>
	Дискета (1,44 МБ) —
	<a href="http://mirror.slitaz.org/boot/floppy-grub4dos">образ</a>
	[ <a href="http://mirror.slitaz.org/boot/floppy-grub4dos.md5">md5</a> ]
</p></div>

<p>Вы можете записать этот образ на дискету при помощи утилиты SliTaz,
	называющейся bootfloppybox, утилиты Windows <a
	href="http://en.wikipedia.org/wiki/RaWrite">rawrite</a>, или просто при
	помощи dd (<code>dd if=floppy-grub4dos of=/dev/fd0</code>).</p>
<p>Также доступен <a href="http://mirror.slitaz.org/floppies/">набор образов
	дискет</a> для тех, кто не может использовать CD-ROM, USB-флеш или карту
	Ethernet.</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
