<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Уголок разработчика | SliTaz</title>
	<meta name="description" content="SliTaz GNU/Linux project information overview"/>
	<meta name="keywords" lang="en" content="about slitaz, gnu, linux, mini distro, livecd"/>
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
		<h4>Разработка</h4>
		<p>SliTaz — дистрибутив сообщества, созданный многими людьми по всему
			миру; все желающие могут помочь и влиться в проект.</p>
		<p>
			<img src="/images/users.png" alt="*" />
			Присоединяйтесь к нам <a href="http://scn.slitaz.org/">на SCN</a>
			и <a href="../mailing-list.php">в рассылке</a>
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Уголок разработчика</h2>

<ul>
	<li><a href="forge.php">Кузница</a> — Совместное управление, KISS, принципы,
		репозитории Mercurial, сайт и другие сервисы.</li>
	<li><a href="/i18n.php">Проект интернационализации</a> — Перевод, цели
		и управление.</li>
	<li><a href="http://hg.slitaz.org/" >Репозитории Mercurial</a></li>
	<li><a href="http://bugs.slitaz.org/">Баг-трекер SliTaz</a></li>
</ul>

<h2>Вливайтесь!</h2>

<p>SliTaz — дистрибутив с открытым исходным кодом, управляемый сообществом.
	Примкнуть к проекту и внести свой вклад могут все желающие —
	от пользователей до хакеров и разработчиков. Для вас всегда найдется
	занятие. Вычитка и написание документации, отправка отчетов об ошибках
	и исправлений в рассылку, работа с wok и внесение новые пакетов, или просто
	помощь другим в рассылке или
	<a href="http://forum.slitaz.org/">на форуме</a>. У проекта SliTaz есть
	репозитории Mercurial, размещенные на системе SliTaz; в случае необходимости
	разработчики могут отправить запрос на создание нового репозитория;
	участники имеют доступ на запись для исправления опечаток, изменения
	скриптов и т.п.</p>
<p>SliTaz — маленькое сообщество, оно прислушивается к своим пользователям.
	Многие разработчики активны на <a href="http://forum.slitaz.org/">форуме</a>
	и в <a href="../mailing-list.php">рассылке</a>.</p>
<p>Для художников выделен специальный сайт; просто зарегистрируйтесь и
	делитесь с другими вашей графикой и картинками. Сайт управляется
	сообществом. Если вы хотите протянуть руку помощи в управлении сайтом,
	свяжитесь с разработчиками или отправьте письмо в рассылку. Присоединяйтесь
	к <a href="http://scn.slitaz.org/groups/artwork/">группе Artwork</a>
	на SCN.</p>

<h2>Деятельность</h2>

<?php require_once("../../lib/get-feeds.php"); ?>

<div class="activity">
	<p><img src="/images/development.png" alt="*" />
		Последние коммиты в wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/?sort=lastchange">Ещё…</a>
	</p>
</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
