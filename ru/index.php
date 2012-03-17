<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux</title>
	<meta name="description" content="SliTaz GNU/Linux русский веб-сайт" />
	<meta name="keywords" lang="ru" content="система, свободная, gnu, linux, открытое ПО, Live-CD LINUX in RAM" />
	<meta name="author" content="Paul Issot"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.ru.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Русский веб-сайт</h4>
		<p>SliTaz — это свободная операционная система, предлагающая полнофункциональный рабочий стол или сервер размером менее чем 35 МБ.</p>
		<p>SliTaz в режиме Live полностью находится в RAM и может загружаться со сменых носителей, таких как CD-ROM и USB-flash. Система безопасная, стабильная и простая в использовании.
			<a href="about/">Ещё…</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="Locale:" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Español</a>
	<a href="../fr/">Français</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Português</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<div class="box">
	<img src="/images/update.png" alt="[Update]" style="float: left; margin-right: 10px; " />

	<p>Помогите нам приобрести выделенный сервер — посетите нашу страницу по <a href="http://www.gofundme.com/3ql70">сбору средств</a> либо станьте нашим официальным <a href="/ru/sponsor/">спонсором</a></p>
</div>

<!--
    SliTaz news starting.
-->

<h2>Последние новости</h2>

<p>На веб-сайте SliTaz вы найдете главные новости проекта, а также новости по общему ходу дел в подпроектах на <a href="http://scn.slitaz.org/">сайте сообщества</a>. Всё это также доступно в виде <a href="/rss.xml">RSS</a>. В рамках проекта также публикуется небольшой ежемесячный бюллетень. Эта страница, как и <a href="../">главная страница</a> сайта даст вам хорошее представление о последних новостях, коммитах и твитах.</p>

<div class="box">
	<img src="../images/news.png" alt=".png" />	
	<a href="http://scn.slitaz.org/">Новости из блога</a> | 
	<a href="http://doc.slitaz.org/ru:newsletter:start">Ежемесячный информационный бюллетень</a>
</div>

<div class="news">
<a name="news"></a>

<ul>
	<li><strong>03 марта 2012 — Вышел SliTaz 4.0-RC2</strong>
	<a name="20120303"></a>
	<p>Команда SliTaz рада сообщить о выходе нового релиз-кандидата SliTaz 4.0-RC2. Мы провели огромную работу по исправлению ошибок в RC1 и доработке наших утилит, таких как TazPKG, TazPanel и TazUSB. Стало проще соединиться с Wi-Fi через TazPanel или новый мастер Wi-Fi. Теперь TazPKG лучше интегрирован с рабочим столом и имеет новую систему уведомлений.</p>
	<p>Эта новая версия идет с полным пакетом Xorg, с поддержкой DRI и с драйверами NV, Intel, Geode и Vesa, работающими «из коробки». Мы еще раз пересобрали все пакеты и сэкономили примерно 2 МБ в базовом Live-CD, поэтому теперь он включает дополнительно Lxrandr, Parcellite и клиент BiTorrent transmission.</p>
	<p>Мы благодарим всех, кто тестировал первый релиз-кандидат; этот RC2 близок к грядущему SliTaz 4.0, выпуск которого запланирован через 2 недели. Скачать ISO-образ RC2 с нашего зеркала (35,1 МБ):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>
	</li>
	
	<li><strong>23 февраля 2012 — Вышел SliTaz 4.0-RC1</strong>
	<a name="20120223"></a>
	<p>Команда SliTaz рада объявить о выпуске первого релиз-кандидата SliTaz 4.0. SliTaz может загружаться за 10–12 с на сравнительно новом железе, а с новым ISO «4-в-1» вы сможете установить полный рабочий стол SliTaz, имея всего 48 МБ RAM. ISO «4-в-1» способен автоматически определять размер памяти и загружать SliTaz в текстовом режиме, в минимальном окружении X, либо с полновесным графическим рабочим столом.</p>
	<p>SliTaz 4.0 будет иметь в репозитории более 3000 хорошо протестированных пакетов, а серия релиз-кандидатов позволит нам отследить самые последние ошибки. После нашего последнего релиза Cooking, все пакеты были пересобраны дважды, чтобы обеспечить качество сборки.</p>
	<p>В этом RC2 мы предлагаем вам новое графическое загрузочное меню и графический выбор языка и раскладки клавиатуры. Дистрибутив содержит новое оформление рабочего стола, а также новый инсталлятор командной строки с CGI/веб-интерфейсом, доступным через TazPanel. Вы можете скачать новый ISO с нашего зеркала:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p> 
	</li>

	<li><a href="news/">Еще новости</a>. Архивы новостей:
		<a href="news/2007.php">2007</a> |
		<a href="news/2008.php">2008</a> |
		<a href="news/2009.php">2009</a> |
		<a href="news/2010.php">2010</a> |
		<a href="news/">2011</a>
	</li>
</ul>

<!-- End of news -->
</div>

<h2>Сейчас в проекте…</h2>
<?php
	require_once("../lib/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="[ ]" /></a>
		Сейчас в сообществе…
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Ещё…</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img 
			src="/images/support.png" alt="[ ]" /></a>
		Сейчас на форуме…
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Ещё…</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="[ ]" /></a>
		Последние коммиты в wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">Ещё…</a>
	</p>
</div>

<h2>Поддержите нас</h2>

<p>Сделайте SliTaz еще более популярным или просто внесите пожертвование. Вы можете использовать PayPal или микроплатежи Flattr для того, чтобы поддержать нас финансово. Вы можете написать в своём блоге, твитнуть, поделиться с другими, говорить о проекте, чтобы помочь распространить SliTaz. Вы также можете присоединиться к проекту, чтобы включиться в разработку или общаться в <a href="http://scn.slitaz.org/">сети сообщества</a> SliTaz.</p>

<p>Вы также можете стать официальным спонсором с ежемесячным взносом или предоставить нам некоторое оборудование или ресурсы сервера.
	<a href="sponsor/">Ещё…</a>
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter и Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.ru.html"); ?>

</body>
</html>
