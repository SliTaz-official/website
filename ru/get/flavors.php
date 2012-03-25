<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>SliTaz LiveCD Flavors</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="ru" content="система, бесплатно, Gnu, Linux, открытое ПО, LiveCD Linux в RAM" />    
	<meta name="author" content="Christophe Lincoln" />
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
		<h4>Загрузка модификаций</h4>

		<p>Система модификаций LiveCD — это простой способ для сообщества создавать ISO-образы для выполнения определенных задач, предлагая выбор конкретных пакетов. Вы можете использовать модификации, сделанные сообществом или создать свою собственную с помощью простого в использовании графического интерфейса.</p>
	</div>
</div>

<!-- Content -->
<div id="content">


<h2>ISO-образы LiveCD на любой вкус</h2>

<p>Для вашего удобства команда SliTaz предлагает некоторые модификации ISO как для стабильной, так и для нестабильной версий:</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-xvesa.iso">slitaz-3.0-xvesa.iso</a>
	[29 МБ] — Полнофункциональное окружение рабочего стола с использованием крошечного графического сервера Xvesa, предоставляющая хороший набор ПО для повседневных задач
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-firefox.iso">slitaz-3.0-firefox.iso</a>
	[29 МБ] — Небольшое окружение рабочего стола с Mozilla Firefox «из коробки»
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-justx.iso">slitaz-3.0-justx.iso</a>
	[15 МБ] — Небольшое окружение рабочего стола на базе Xorg и Openbox, использующее только окружение X и утилиты для создания вашего собственного рабочего стола
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-base.iso">slitaz-3.0-base.iso</a>
	[8 МБ] — Базовая система в текстовом режиме, включающая полезные утилиты командной строки. Хороший выбор для установки на сервер
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-loram.iso">slitaz-3.0-loram.iso</a>
	[35 МБ] — Модификация Loram, которая позволяет запускать SliTaz на машинах с очень ограниченными ресурсами, нуждается только в 80 МБ и не использует CDROM во время своей работы
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-loram-cdrom.iso">slitaz-3.0-loram-cdrom.iso</a>
	[131 МБ] — Модификация Loram, которой нужно для запуска только 16 МБ памяти, небольшой объем подкачки и использующая загрузочный CDROM во время работы
</p>

<p class="box">
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-3in1.iso">slitaz-3.0-3in1.iso</a>
	[30 МБ] — Модификация «3-в-1», включающая в себя ISO-образы base, justx и core
</p>

<div class="box">
	<img src="../../images/network.png" alt="png" />
	Просмотрите папку модификаций на зеркале:
	<a href="http://mirror.slitaz.org/iso/stable/flavors/">Stable</a> |
	<a href="http://mirror.slitaz.org/iso/cooking/flavors/">Cooking</a>
</div>


<h2>Загрузка и создание модификаций</h2>

<p>Модификация (<em>flavor</em>) — это файл с расширением .flavor, который используется для создания специальной модификации. Графическая утилита Tazlitobox позволяет создать модификацию в несколько кликов мышью. В <a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.en.html">руководстве <em>(англ.)</em></a> и <a href="http://doc.slitaz.org/ru:handbook:genlivecd">документации</a> описаны детальные инструкции по созданию модификаций. В командной строке вы можете получить список доступных модификаций при помощи команды <code>tazlito list-flavors</code>.</p>


<h3>Создавайте и делитесь собственными модификациями</h3>

<p>Как стабильная, так и «Cooking»-версия предлагают на зеркале базовую модификацию (<em>core</em>), она может быть использована в качестве основы для создания ваших собственных модификаций. Документация содержит все необходимые инструкции для <a href="http://doc.slitaz.org/en:handbook:genlivecd">создания собственной модификации LiveCD</a>.</p>

<p>Если вы создали свою собственную модификацию, вы можете отослать ее для обсуждения в <a href="../mailing-list.php">рассылку</a>, для того, чтобы ее можно было протестировать и включить в список официальных модификаций.</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>