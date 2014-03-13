<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux</title>
	<meta name="description" content="Главная страница проекта SliTaz GNU/Linux" />
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../config.php"); include("../lib/html/header.ru.html"); ?>


<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>SliTaz по-русски</h4>
		<p>SliTaz — свободная операционная система с открытыми исходниками.
			Это полнофункциональный рабочий стол или сервер размером менее чем
			40 МБ. Система проста в использовании, быстрая, безопасная и
			стабильная. <a href="about/">Узнать больше…</a></p>
		<div class="button" style="text-align: left; margin-top: 15px;">
			<img src="/images/download-30.png" />
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include("../lib/lang.php"); ?>


<!-- Content -->
<div id="content">

<div class="box">
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt"
		title="Посетить кампанию"><img src="../images/gofundme.png"></a>
	Ознакомьтесь с кампанией по сбору средств
	<a href="http://www.gofundme.com/slitaz2014?utm_medium=wdgt">
		SliTaz 2014!</a>
</div>

<!--
	SliTaz news starting.
-->

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Наш спонсор</strong></p>
	<?php include("../lib/rand-sponsor.php"); ?>
	<p><a href="/ru/sponsor/">Стать спонсором</a></p>
</div>

<!-- We just keep the last 3 web site news -->
<div class="news" style="margin-right: 220px;">

	<h2>Последние релизы</h2>

	<ul>
		<li><strong><a href="news/#d20140216">Новый SliTaz Cooking</a></strong>
			<span>— 16 февраля 2014</span></li>
		<li><strong><a href="news/2012.php#d20120410">Выпуск SliTaz 4.0</a></strong>
			<span>— 10 апреля 2012</span></li>
		<li><strong><a href="news/2012.php#d20120303">Вышел SliTaz 4.0 RC2</a></strong>
			<span>— 03 марта 2012</span></li>
		<li><strong><a href="news/">Архив новостей</a></strong>
			<span>— 2007–2013</span></li>
	</ul>

<!-- End of news -->
</div>


<h2>Сейчас в проекте…</h2>

<?php require_once("../lib/get-feeds.php"); ?>

<div class="activity">
	<p><img src="/images/users.png" alt="*" />
		Сейчас в сообществе…
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">Ещё…</a>
	</p>
</div>

<div class="activity">
	<p><img src="/images/support.png" alt="*" />
		Сейчас на форуме…
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">Ещё…</a>
	</p>
</div>

<div class="activity">
	<p><img src="/images/development.png" alt="*" />
		Последние коммиты в wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/?sort=lastchange">Ещё…</a>
	</p>
</div>


<!-- SCN blog posts -->
<h2>Последние записи в блоге</h2>

<div class="news">
	<?php get_feed_blog("blog.xml"); ?>
</div>


<!-- Twitter -->
<div id="twitter">
<a class="twitter-timeline"  href="https://twitter.com/slitaz"
	data-widget-id="420830244551938048">Tweets by @slitaz</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>


<h2>Поддержите нас</h2>

<p>Сделайте SliTaz еще более популярным или просто внесите пожертвование.
	Вы можете использовать PayPal или микроплатежи Flattr для того, чтобы
	поддержать нас финансово. Вы можете написать в своём блоге, твитнуть,
	поделиться с другими, рассказать о проекте, чтобы помочь распространить
	SliTaz. Вы также можете присоединиться к проекту, чтобы включиться
	в разработку или общаться в <a href="http://scn.slitaz.org/">сети
	сообщества</a> SliTaz.</p>
<p>Вы также можете стать официальным спонсором с ежемесячным взносом или
	предоставить нам некоторое оборудование или ресурсы сервера. <a
	href="sponsor/">Ещё…</a></p>

<?php include("../lib/html/donate.html"); ?>


<h2>Распространение SliTaz</h2>

<p>Один из способов помочь проекту — это сделать SliTaz еще более популярным.
	Напишите в своём блоге, твитните, поделитесь с другими, расскажите о
	проекте. SliTaz социален, вы можете присоединиться к нам, поделиться своей
	графикой или сообщением в блоге на <a href="http://scn.slitaz.org/">SliTaz
	Community Network</a>, нажать «Нравится» на официальной странице SliTaz
	в Facebook и принять участие в разработке!</p>

<?php include("../lib/html/social.html"); ?>


<h2>Интернационализация</h2>

<p>Сайт SliTaz доступен на различных языках, поддерживаемых командой
	<a href="/i18n.php">интернационализации</a> (i18n). Часто требуется помощь,
	и вы можете присоединиться к нам, если вы хотели бы видеть сайт переведенным
	на ваш язык.</p>
<p><img src="../images/users.png" alt="*" />
	<a href="http://scn.slitaz.org/groups/i18n/">Присоединиться к группе i18n
	на SCN</a></p>

<!-- End of content  -->
</div>

<?php include("../lib/html/footer.ru.html"); ?>

</body>
</html>
