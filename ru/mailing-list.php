<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Рассылка | SliTaz</title>
	<meta name="description" content="Рассылка пользователей и разработчиков SliTaz" />
	<meta name="keywords" content="SliTaz рассылка дискуссии" lang="ru" />
	<meta name="author" content="Christophe Lincoln" />
	<?php include("../lib/html/meta-link.html"); ?>
	<style type="text/css">
		ul.nobullet { list-style-type: none; }
		.icon16 { width: 16px; height: 16px; }
	</style>
</head>
<body>

<?php include("../lib/html/header.ru.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Рассылка</h4>
		<p>Обсуждения и анонсы команды SliTaz (а также поддержка и разработка).
			Всё это — части рассылки — присоединяйтесь, чтобы получить помощь
			или влиться в проект.</p>
		<p><img src="/images/users.png" alt="*" />
			Также вы можете присоединиться к нам на <a
			href="http://scn.slitaz.org/">SCN</a>, получить поддержку на <a
			href="http://forum.slitaz.org/">форуме</a>, или:</p>
		<!-- Follow -->
		<div style="margin-top: 12px;">
			<a href="https://twitter.com/slitaz" class="twitter-follow-button"
				data-show-count="true" data-show-screen-name="false">Читать
				@slitaz в Твиттере</a>
			<script type="text/javascript">
				document.write('<a href="https://twitter.com/slitaz" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Читать @slitaz в Твиттере</a>');
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>
		</div>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Рассылка SliTaz</h2>

<ul>
	<li><a href="#about">О рассылке</a> — Поддержка и разработка.</li>
	<li><a href="#usage">Использование</a> — Подписаться, отписаться и т.п.</li>
	<li><a href="#archives">Архив рассылки</a> — Читать и искать в архиве
		сообщений.</li>
</ul>


<h3 id="about">О рассылке</h3>

<p>Обсуждение в рассылке является основной формой общения в сообществе SliTaz.
	Рассылка открыта для всех, вы свободно можете подписаться и отписаться
	в любое время. Это очень эффективный способ сотрудничества, он также
	используется для предоставления бесплатной технической поддержки для
	пользователей SliTaz. Разработчики, продвинутые пользователи, корректоры
	и т.п. используют ту же рассылку, чтобы управлять развитием проекта.
	Использование одной той же рассылки как для поддержки, так и для
	разработки, позволяет охватить более широкую аудиторию, в результате
	получить более быстрый и более точный ответ. Тем не менее, участники
	рассылки — добровольцы и они делают лучшее, что им позволяет их свободное
	время. Любезность и вежливость являются требуемыми этикетом и немного юмора
	никогда и никому не повредит.</p>
<p><em>Рассылка</em> используется для отправки и получения сообщений.
	Это означает, что все зарегистрированные пользователи могут отправлять
	письма в рассылку и получать письма, написанные другими пользователями.
	Сообщения рассылаются движком <a
	href="http://www.tuxfamily.org/">TuxFamily</a>, который работает
	на замечательном <a href="http://www.vhffs.org/">VHFFS</a>.</p>


<h4>Вежливость</h4>

<p>Часто рассылка используется некоторыми страстными и чувствительными людьми.
	Сделайте дополнительные усилия, чтобы относиться к другим с уважением,
	даже если вы чувствуете, что с вами плохо обращались. Если вы хотите
	сказать что-то негативное или критическое, пожалуйста, воздержитесь
	от этого. Если человек выглядит неуместным, свяжитесь с разработчиками
	SliTaz.</p>


<h3 id="usage">Использование</h3>

<p>Для того, чтобы иметь возможность отправить сообщение в рассылку, сначала
	вы должны подписаться на неё, после чего вам придет письмо-подтверждение.
	Это письмо содержит число подтверждения, которое вы должны переслать
	администраторам рассылки (для предотвращения спама). Как только письмо
	с сообщением подтверждения получено, вы можете отправлять письма в рассылку
	и получать все сообщения, которые будут написаны другими участниками.
	Заметьте, что письма могут быть отфильтрованы вашей почтовой программой
	в определенную папку. Также, разумным решением является использовать кнопку
	«Ответить», чтобы ответить на письмо, для того, чтобы ваш ответ попал
	в соответствующую нить обсуждения.</p>

<ul>
	<li>Адрес для управления подпиской (подписаться, отписаться, справка): <a
		href="mailto:slitaz-request@lists.tuxfamily.org">slitaz-request@lists.tuxfamily.org</a></li>
	<li>Чтобы подписаться, отправьте письмо с темой «subscribe»</li>
	<li>Чтобы отписаться, отправьте письмо с темой «unsubscribe»</li>
	<li>Чтобы получить справку, отправьте письмо с темой «help»</li>
	<li>Адрес, по которому можно написать письмо в рассылку: <a
		href="mailto:slitaz@lists.tuxfamily.org">slitaz@lists.tuxfamily.org</a></li>
</ul>


<h4>Формат</h4>

<p>Сообщения должны отсылаться в виде обычного текста (не HTML!), с длиной
	строк по 72–80 символов, чтобы люди, использующие почтовые клиенты
	в текстовом режиме, могли легко их прочитать. Формат этих сообщений
	поддерживается автоматически многими хорошими почтовыми клиентами, такими
	как Sylpheed. Использование этого формата позволяет потом проще читать
	архивы. Желательно также удалять ненужное цитирование и не прикреплять
	большие файлы.</p>


<h3 id="archives">Архив рассылки</h3>

<p>Рассылка — это общественный форум, все сообщения архивируются и доступны
	для поиска в Интернете. Это позволяет незарегистрированным людям следить
	за рассылкой. Она также является хорошим источником информации
	по конкретным вопросам. Рассылка архивируется каждую ночь, и вы можете
	легко просматривать архив с помощью движка рассылки TuxFamily.</p>
<p>По приведенным ниже ссылкам вы можете просмотреть архив рассылки,
	автоматически переведенный на русский язык такими переводчиками:</p>

<ul class="nobullet">
	<li><img class="icon16" src="http://www.translate.ru/favicon.ico" alt="*" /> <a href="http://www.translate.ru/General/au-ru/http%3a%2f%2flistengine.tuxfamily.org%2flists.tuxfamily.org%2fslitaz%2f">онлайн переводчик ПРОМТ</a></li>
	<li><img class="icon16" src="http://translate.google.com/favicon.ico" alt="*" /> <a href="http://translate.google.com/translate?sl=auto&amp;tl=ru&amp;hl=ru&amp;u=http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/">переводчик Google</a></li>
	<li><img class="icon16" src="http://microsofttranslator.com/icon.ico" alt="*" /> <a href="http://www.microsofttranslator.com/bv.aspx?from=&amp;to=ru&amp;a=http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/">переводчик Bing™</a></li>
</ul>

<p>Проект SliTaz никак не связан с указанными сервисами перевода, каждый из них
	имеет свои достоинства и недостатки, по вопросам качества перевода или
	наличия (отсутствия) каких-либо функций, обращайтесь непоследственно
	к разработчикам указанных сервисов. Кроме того, вы всегда можете читать
	в оригинале сообщения рассылки, упорядоченные по дате или по теме
	обсуждения (<em>Thread</em>) по приведенной ниже ссылке или таблице:</p>

<ul>
	<li><a href="http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/">Архив
		рассылки</a> в оригинале</li>
</ul>

<div>
<object type="text/html" width="100%" height="345"
	data="../lib/archives.php?lang=ru"></object>
</div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.ru.html"); ?>

</body>
</html>
