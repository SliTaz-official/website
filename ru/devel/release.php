<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Руководство по релизам | SliTaz</title>
	<meta name="description" content="slitaz developers release guide cooking stable packages"/>
	<meta name="keywords" lang="en" content="slitaz, devel, tazdev, cooking, source"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.html");
include("../../lib/html/nav.html"); 
include("../../lib/lang.php"); 
?>

<!-- Content -->
<section id="content">

<h2>
Руководство по релизам
</h2>

<ul>
<li>
<a href="#cooking">Релиз Cooking</a>
</li>
<li>
<a href="#stable">Стабильный релиз</a>
</li>
<li>
<a href="#project">Релиз проекта</a></li>
</ul>


<h2 id="cooking">
Релиз Cooking
</h2>

<p>
НАПИСАТЬ — некоторое количество необновляемой информации (сейчас мы используем cookiso):
<a href="http://doc.slitaz.org/en:cookbook:reltasks">в вики/cookbook</a>
</p>


<h2 id="stable">
Стабильный релиз
</h2>

<p>
НАПИСАТЬ
</p>

<p>
Инструкции по использованию сборочного хоста описаны в Cookbook:
<a href="http://doc.slitaz.org/en:cookbook:buildhost">SliTaz Build Host (tank)</a>
(русской версии страницы нет).
</p>


<h2 id="project">
Релиз проекта
</h2>

<p>
Суб-проекты SliTaz выпускаются индивидуально, используя инструмент разработчиков SliTaz, известный под именем «tazdev».
Вот замечательное руководство для командной строки как выпустить проект.
В этом руководстве мы собираемся выпустить «SPK» версии 1.0:
</p>

<pre>
$ cd spk
$ hg pull -u
$ hg tag 1.0
$ hg push
$ tazdev -rp spk
</pre>

<p>
Некоторые пакеты не должны быть заархивированы на зеркале, так как они зеркалируются с полным деревом пакета.
После того, как вы выпустили пакет и сказали «да» обновлению wok (или сделали это вручную), вы можете залить его в hg.slitaz.org и ждать когда соберется пакет на сервере <a href="http://cook.slitaz.org/">Cooker</a>.
Залить в Hg:
</p>

<pre>
$ cd ../wok
$ hg push
</pre>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
