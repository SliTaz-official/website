<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Редакции LiveCD | SliTaz</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="ru" content="система, бесплатно, Gnu, Linux, открытое ПО, LiveCD Linux в RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php
include("../../config.php");
include("../../lib/html/header.ru.html");
include("../../lib/html/nav.ru.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<div id="content">

<h2>Загрузка редакций</h2>

<p>
	Система редакций LiveCD — это простой способ для сообщества создавать 
	ISO-образы для выполнения определенных задач, предлагая выбор конкретных
	пакетов. Вы можете использовать редакции, сделанные сообществом или 
	создать свою собственную с помощью простого в использовании графического
	интерфейса.
</p>

<h2>ISO-образы LiveCD на любой вкус</h2>

<p>Для вашего удобства команда SliTaz предлагает некоторые редакции ISO как для стабильной, так и для нестабильной версий:</p>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-xvesa.iso">slitaz-3.0-xvesa.iso</a>
	[29 МБ] — Полнофункциональное окружение рабочего стола с использованием крошечного графического сервера Xvesa, предоставляющая хороший набор ПО для повседневных задач
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-firefox.iso">slitaz-4.0-firefox.iso</a>
	[43 МБ] — Небольшое окружение рабочего стола с Mozilla Firefox «из коробки»
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-justx.iso">slitaz-4.0-justx.iso</a>
	[16 МБ] — Небольшое окружение рабочего стола на базе Xorg и Openbox, использующее только окружение X и утилиты для создания вашего собственного рабочего стола
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-base.iso">slitaz-4.0-base.iso</a>
	[8 МБ] — Базовая система в текстовом режиме, включающая полезные утилиты командной строки. Хороший выбор для установки на сервер
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram.iso">slitaz-4.0-loram.iso</a>
	[41 МБ] — Редакция Loram, которая позволяет запускать SliTaz на машинах с очень ограниченными ресурсами, нуждается только в 128 МБ и не использует CDROM во время своей работы
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram-cdrom.iso">slitaz-4.0-loram-cdrom.iso</a>
	[165 МБ] — Редакция Loram, которой нужно для запуска только 24 МБ памяти, небольшой объем подкачки и использующая загрузочный CDROM во время работы
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	[35 МБ] — Редакция «3-в-1», включающая в себя ISO-образы base, justx, gtkonly и core
</p></div>

<div class="box">
	<img src="/images/network.png" alt="*" />
	Просмотрите папку редакций на зеркале:
	<a href="http://mirror.slitaz.org/iso/stable/flavors/">Stable</a> |
	<a href="http://mirror.slitaz.org/iso/cooking/flavors/">Cooking</a>
</div>


<h2>Загрузка и создание редакций</h2>

<p>Редакция (<em>flavor</em>) — это файл с расширением .flavor, который используется для создания специальной редакции. Графическая утилита Tazlitobox позволяет создать редакцию в несколько кликов мышью. В <a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.en.html">руководстве <em>(англ.)</em></a> и <a href="http://doc.slitaz.org/ru:handbook:genlivecd">документации</a> описаны детальные инструкции по созданию редакций. В командной строке вы можете получить список доступных редакций при помощи команды <code>tazlito list-flavors</code>.</p>


<h3>Создавайте и делитесь собственными редакциями</h3>

<p>Как стабильная, так и «Cooking»-версия предлагают на зеркале базовую редакцию (<em>core</em>), она может быть использована в качестве основы для создания ваших собственных редакций. Документация содержит все необходимые инструкции для <a href="http://doc.slitaz.org/en:handbook:genlivecd">создания собственной редакции LiveCD</a>.</p>

<p>Если вы создали свою собственную редакцию, вы можете отослать ее для обсуждения в <a href="../mailing-list.php">рассылку</a>, для того, чтобы ее можно было протестировать и включить в список официальных редакций.</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
